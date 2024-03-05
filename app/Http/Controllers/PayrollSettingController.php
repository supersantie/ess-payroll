<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PayrollSetting;

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

        // dd($request->all());
        //
        try {
            foreach ($request->all() as $key => $value) {
                // Update or create a record based on the 'key' value
                PayrollSetting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
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
