<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Employee;
use App\Models\EssAccount;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;
use App\Mail\OtpEmail; // Assuming you have a Mailable class for sending OTP emails

class EssController extends Controller
{

    public function index()
    {
        // dd(Hash::make('123456'));
        return view('auth.ess_login');
    }

    public function verify(Request $request)
    {

        // Redirect the user to the dashboard if the user has already requested an OTP within the last 5 minutes.
        $validatedData = $request->validate([
            'employee_code' => 'required',
            'password' => 'required',
        ]);

        $employee = EssAccount::where('employee_code', $validatedData['employee_code'])->first();

        $employeeMail = $employee->email;

        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }

        if (!Hash::check($validatedData['password'], $employee->password)) {
            return response()->json(['error' => 'Incorrect password'], 401);
        }

        if ($employee->otp_requested_at && $employee->otp_requested_at->diffInMinutes(Carbon::now()) < 5) {
            $errorMessage = 'Please wait before requesting another OTP';
            $employeeCode = $employee->employee_code;
            $countdownDuration = 300;

            return view('auth.ess_otp', compact('employeeCode', 'employeeMail', 'errorMessage', 'countdownDuration'));
        }

        if ($request->has('device_id') && Agent::device() !== $employee->device_id) {
            $employee->device_id = Agent::device();
            $employee->save();

            return redirect()->route('pages.ess.dashboard');
        }

        $otp = mt_rand(100000, 999999);
        $employee->otp_code = $otp;
        $employee->otp_requested_at = Carbon::now();

        $employee->device_id = Agent::device();
        $employee->save();

        $employeeCode = $employee->employee_code;

        // Run php artisan queue:work
        Queue::push(function () use ($employee, $otp) {
            Mail::to($employee->email)->send(new OtpEmail($otp));
        });

        return view('auth.ess_otp', compact('employeeCode', 'employeeMail'));
    }





    public function validateOTP(Request $request)
    {

        try {
            // 1. Get the OTP code input and employee code
            $otp = $request->input('otp_code');
            $employeeCode = $request->input('employee_code');

            // 2. Find the employee in the Employee Table
            $employee = EssAccount::where('employee_code', $employeeCode)->first();

            // 3. Check if employee and OTP match
            if (!$employee || $employee->otp_code != $otp) {
                throw new \Exception('Invalid OTP');
            }

            // 4. If valid, store the ESS Account in the session
            $info = Employee::where('code', $employeeCode)->first();
            $request->session()->put(['info' => $info, 'ess_account' => $employee]);

            // 5. Return a JSON response indicating success
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // 6. If invalid, return a JSON response with the error message
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function destroy(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // return view('auth.ess_login');
        return redirect()->intended('/ess/login');
    }
}
