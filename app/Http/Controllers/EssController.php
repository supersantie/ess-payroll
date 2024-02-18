<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Employee;
use App\Models\EssAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

        $validatedData = $request->validate([
            'employee_code' => 'required',
            'password' => 'required',
        ]);

        $employee = EssAccount::where('employee_code', $validatedData['employee_code'])->first();

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

            // return response()->json();
            return view('auth.ess_otp', compact('employeeCode', 'errorMessage', 'countdownDuration'));

        }

        $otp = mt_rand(100000, 999999);
        $employee->otp_code = $otp;
        $employee->otp_requested_at = Carbon::now();
        $employee->save();

        Mail::to($employee->email)->send(new OtpEmail($otp));

        $employeeCode = $employee->employee_code;

        return view('auth.ess_otp');
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
            $request->session()->put(['info'=> $info, 'ess_account'=> $employee]);

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
