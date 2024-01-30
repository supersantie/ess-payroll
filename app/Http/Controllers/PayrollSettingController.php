<?php

namespace App\Http\Controllers;

use App\Models\PayrollSetting;
use Illuminate\Http\Request;

class PayrollSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('pages.payroll.settings');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PayrollSetting $payrollSetting)
    {
        //
    }
}
