<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\CompanyLoan;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class CompanyLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = \App\Models\Core\Employee::all();

        $loans = \App\Models\Core\Employee::with("companyLoans")->get();

        // dd()

        $statusColors = [
            'Paid' => 'bg-success bg-opacity-10 text-success',
            'Unsettled' => 'bg-danger bg-opacity-10 text-danger',
            'Pending' => 'bg-warning bg-opacity-10 text-warning',
        ];

        return view('pages.payroll.deductions_and_contributions.company_loan', compact('employees', 'loans', 'statusColors'));
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
        try {
            $employeeCode = $request->employee;
            // Convert amount to float and round to 2 decimal places
            $amount = round((float) str_replace(['PHP ', ','], '', $request->input('amount')), 2);

            // Convert amount_to_be_paid to float and round to 2 decimal places
            $amountToBePaid = round((float) str_replace(['PHP ', ','], '', $request->input('amount_to_be_paid')), 2);
            // dd("test");
            CompanyLoan::create([
                "employee_code" => $employeeCode,
                "amount" => $amount,
                "months_to_be_paid"  => $request->months_to_be_paid,
                "amount_to_be_paid"  => $amountToBePaid,
                "loan_repayment"  => $request->loan_repayment,
            ]);

            return response()->json(['success' => "Added successfully!"], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error', 'message' =>$e], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred'], 500);
        }
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
