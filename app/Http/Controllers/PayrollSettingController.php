<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PayrollSetting;
use Illuminate\Support\Facades\Log;

class PayrollSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payrollSettings = PayrollSetting::pluck('value', 'key')->toArray();


        return view('pages.payroll.settings', compact('payrollSettings'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(PayrollSetting $payrollSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PayrollSetting $payrollSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PayrollSetting $payrollSetting)
    {

        // $updates = [];
        try {
            foreach ($request->all() as $key => $value) {
                // Find the existing record by key
                $existingSetting = PayrollSetting::where('key', $key)->first();

                if ($existingSetting) {
                    // Update the existing record
                    $existingSetting->update(['value' => $value]);
                } else {
                    // Log that the key does not exist
                    Log::warning("Setting with key '$key' does not exist. Skipping update.");
                }

                Log::info($key . $value);
            }

            $userEmail = $request->user()->email ?? '';
            $description = 'Updated payroll settings';
            $ipAddress = $request->ip();
            $actionType = 'update';

            ActivityLog::create([
                'user_email' => $userEmail,
                'description' => $description,
                'ip_address' => $ipAddress,
                'action_type' => $actionType,
            ]);

            return response()->json(['success' => true, 'message' => 'Settings updated successfully!'], 200);
        } catch (\Throwable $th) {
            // Handle the exception, log it, or rethrow if necessary
            throw $th;
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PayrollSetting $payrollSetting)
    {
        //
    }
}
