<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Employee;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function sss()
    {
        $employees = Employee::with('overtimes')->get();

        $statusColors = [
            'approved' => 'bg-success bg-opacity-10 text-success',
            'pending' => 'bg-warning bg-opacity-10 text-warning',
            'declined' => 'bg-danger bg-opacity-10 text-danger',
        ];

        return view('pages.payroll.deductions_and_contributions.sss', compact('employees', 'statusColors'));
    }

    public function pagibig()
    {

        $employees = Employee::with('overtimes')->get();

        $statusColors = [
            'approved' => 'bg-success bg-opacity-10 text-success',
            'pending' => 'bg-warning bg-opacity-10 text-warning',
            'declined' => 'bg-danger bg-opacity-10 text-danger',
        ];

        return view('pages.payroll.deductions_and_contributions.pag_ibig', compact('employees', 'statusColors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::with('overtimes')->get();
        return view('pages.payroll.overtime', compact('employees', 'statusColors'));
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
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
