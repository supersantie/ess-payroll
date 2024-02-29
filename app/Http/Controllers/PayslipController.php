<?php

namespace App\Http\Controllers;

use App\Models\Payslip;
use App\Models\Employee;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payrolls = Employee::with('payrolls')->where('code', session('info')->code)->first();
        // dd($payslips->payrolls);

        return view('pages.payroll.reports.payslip', compact('payrolls'));
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

    public function export()
    {
    }

    public function pdf()
    {
        $pdf = PDF::view('pdf.invoice'); // Load the Blade view
        $pdf->save('test.pdf');
    }
}
