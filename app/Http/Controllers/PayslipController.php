<?php

namespace App\Http\Controllers;

use App\Models\Payslip;
use App\Models\Employee;
use Illuminate\Http\Request;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('pages.payroll.reports.payslip');
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
    public function show(Payslip $payslip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payslip $payslip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payslip $payslip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payslip $payslip)
    {
        //
    }
}
