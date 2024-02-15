<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        // 1. Validate the request data
        $validatedData = $request->validate([
            'employee_code' => 'required',
            'password' => 'required',
        ]);

        // 2. Find the employee in the database
        $employee = EssAccount::where('employee_code', $validatedData['employee_code'])->first();

        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }

        // 3. Verify the password
        if (!Hash::check($validatedData['password'], $employee->password)) {
            return response()->json(['error' => 'Incorrect password'], 401);
        }

        // 4. Check if an OTP has been requested recently
        if ($employee->otp_requested_at && $employee->otp_requested_at->diffInMinutes(Carbon::now()) < 5) {
            return response()->json(['error' => 'Please wait before requesting another OTP'], 429);
        }

        // 5. Generate and send OTP
        $otp = mt_rand(100000, 999999); // Generate OTP
        $employee->otp_code = $otp;
        $employee->otp_requested_at = Carbon::now(); // Store the timestamp of OTP request
        $employee->save();

        // 6. Send email OTP code to the email account attached to the Employee using SMTP
        Mail::to($employee->email)->send(new OtpEmail($otp)); // Assuming you have configured mail settings and created OtpEmail Mailable

        $employeeCode = $employee->employee_code;
        return view('auth.ess_otp', compact('employeeCode'));
    }


    public function validateOTP(Request $request)
    {
        // 1. Get the OTP code input and employee code
        $otp = $request->otp_code;
        $employeeCode = $request->employee_code;

        // 2. Find the employee in the Employee Table
        $employee = EssAccount::where('employee_code', $employeeCode)->first();

        // 3. Do try catch and compare the OTP input into the otp_code column in Employee Table.
        try {
            if (!$employee || $employee->otp_code != $otp) {
                throw new \Exception('Invalid OTP');
            }

            // If valid, return a JSON response indicating success
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // If invalid, return a JSON response with the error message
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
