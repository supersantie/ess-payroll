<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Employee;
use Illuminate\Support\Str;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function sss()
    {
        $employees = \App\Models\Core\Employee::with(['loans' => function ($query) {
            $query->where('government_benefit_type', 'sss');
        }])->get();

        $statusColors = [
            'On going' => 'bg-secondary bg-opacity-10 text-secondary',
            'Finished' => 'bg-success bg-opacity-10 text-success',
        ];


        return view('pages.payroll.deductions_and_contributions.sss', compact('employees', 'statusColors'));
    }

    public function pagibig()
    {

        $employees = \App\Models\Core\Employee::with(['loans' => function ($query) {
            $query->where('government_benefit_type', 'pag_ibig');
        }])->get();

        $statusColors = [
            'On going' => 'bg-secondary bg-opacity-10 text-secondary',
            'Finished' => 'bg-success bg-opacity-10 text-success',
        ];

        return view('pages.payroll.deductions_and_contributions.pag_ibig', compact('employees', 'statusColors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = \App\Models\Core\Employee::with('overtimes')->get();
        return view('pages.payroll.overtime', compact('employees', 'statusColors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // 

        try {
            $employeeCode = $request->employee;
            // Convert amount to float and round to 2 decimal places
            $amount = round((float) str_replace(['PHP ', ','], '', $request->input('amount')), 2);

            // Convert amount_to_be_paid to float and round to 2 decimal places
            $amountToBePaid = round((float) str_replace(['PHP ', ','], '', $request->input('amount_to_be_paid')), 2);

            // dd($request->months_to_pay);
            // dd("test");
            Loan::create([
                "employee_code" => $employeeCode,
                "loan_account_number" => $request->loan_account_number,
                "amount" => $amount,
                "months_to_pay"  => intval($request->months_to_be_paid), // Adjusted field name
                "amount_to_be_paid"  => $amountToBePaid, // Adjusted field name
                "loan_type"  => $request->loan_type,
                "loan_repayment"  => $request->loan_repayment,
                "government_benefit_type"  => $request->government_benefit_type,
            ]);

            $userEmail = $request->user()->email ?? '';
            $description = $request->loan_type . ' in ' . Str::upper(str_replace('_', '', $request->government_benefit_type)) . ' created for ' . $request->employee . ' with amount of' . $request->amount;
            $ipAddress = $request->ip();
            $actionType = 'create';

            ActivityLog::create([
                'user_email' => $userEmail,
                'description' => $description,
                'ip_address' => $ipAddress,
                'action_type' => $actionType,
            ]);

            return response()->json(['success' => "Added successfully!"], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
        // dd($request->all());
        // 

        try {
            $employeeCode = $request->employee;
            // Convert amount to float and round to 2 decimal places
            $amount = round((float) str_replace(['PHP ', ','], '', $request->input('amount')), 2);

            // Convert amount_to_be_paid to float and round to 2 decimal places
            $amountToBePaid = round((float) str_replace(['PHP ', ','], '', $request->input('amount_to_be_paid')), 2);

            // dd($request->months_to_pay);
            // dd("test");
            Loan::create([
                "employee_code" => $employeeCode,
                "loan_account_number" => $request->loan_account_number,
                "amount" => $amount,
                "months_to_pay"  => intval($request->months_to_be_paid), // Adjusted field name
                "amount_to_be_paid"  => $amountToBePaid, // Adjusted field name
                "loan_type"  => $request->loan_type,
                "loan_repayment"  => $request->loan_repayment,
                "government_benefit_type"  => $request->government_benefit_type,
            ]);

            $userEmail = $request->user()->email ?? '';
            $description = $request->loan_type . ' in ' . Str::upper(str_replace('_', '', $request->government_benefit_type)) . ' created for ' . $request->employee . ' with amount of' . $request->amount;
            $ipAddress = $request->ip();
            $actionType = 'create';

            ActivityLog::create([
                'user_email' => $userEmail,
                'description' => $description,
                'ip_address' => $ipAddress,
                'action_type' => $actionType,
            ]);

            return response()->json(['success' => "Added successfully!"], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
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
