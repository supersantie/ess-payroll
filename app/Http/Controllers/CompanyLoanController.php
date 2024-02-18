<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\CompanyLoan;
use Illuminate\Http\Request;

class CompanyLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();

        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
            'late' => 'bg-danger bg-opacity-10 text-danger',
        ];

        return view('pages.payroll.deductions_and_contributions.company_loan', compact('employees','statusColors'));
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
    public function show(CompanyLoan $companyLoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyLoan $companyLoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyLoan $companyLoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyLoan $companyLoan)
    {
        //
    }
}
