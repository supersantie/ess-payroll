<?php

namespace App\Http\Controllers;

use App\Models\EssAccount;
use App\Models\Employee;
use Database\Seeders\EssAccountSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EssAccountController extends Controller
{


    public function login(Request $request)
    {
       

        try {
            $employee = Employee::with('ess_account')->where('code', $request->employee_code)->firstOrFail();
            $checkEssAccount = EssAccount::with('employee')->where('employee_code', $request->employee_code)->firstOrFail();
            
            // dd($checkEssAccount);
            // dd($employee);

            return view('pages.ess.ess-home', compact('employee', 'checkEssAccount'));

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $message = "Employee " . $request->employee_code . " not found! Contact the HR Department for further assistance.";
            dd($message);
        }
        
        
        // try {

          


        //     $hashedPassword = Hash::make($request->password);
        //     if (Hash::check('123456', $hashedPassword)) {
        //         // The passwords match...
        //         dd("Password Matched!");
        //     } else {
        //         dd("Password not matched :(");
        //     }
        // } catch (\Throwable $th) {
        //     //throw $th;
        // }
    }

    public function logout()
    {
    }
}
