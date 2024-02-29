<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reimbursement;
use Illuminate\Support\Facades\Validator;

class ReimbursementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $reimbursements = Reimbursement::where('employee_code', session('info')->code)->get();

        $statusColors = [
            'approved' => 'bg-success bg-opacity-10 text-success',
            'pending' => 'bg-warning bg-opacity-10 text-warning',
            'denied' => 'bg-danger bg-opacity-10 text-danger',
        ];



        return view('pages.ess.reimbursement', compact('reimbursements', 'statusColors'));
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
            // 1. Get all request values
            $requestData = $request->all();

            // 2. Validate the request values
            $validator = Validator::make($requestData, [
                'amount' => [
                    'required',
                    'string',
                    function ($attribute, $value, $fail) {
                        // Remove 'PHP' prefix and commas
                        $cleanedValue = str_replace(['PHP ', ','], '', $value);

                        // Check if the cleaned value is numeric
                        if (!is_numeric($cleanedValue)) {
                            $fail('The ' . $attribute . ' must be a number.');
                        }
                    }
                ],
                'reimbursement_category' => ['required', 'in:miscellaneous,travel,transportation,office supplies,meal'],
                'or_number' => ['required', 'string'],
                'remarks' => ['required', 'string'],
                'proof_of_payment' => ['required', 'file'],
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 422);
            }

            // Get the employee_code from session
            $employeeCode = session('info')->code;

            // 3. Store the proof_of_payment file
            $proofOfPaymentPath = $request->file('proof_of_payment')->storeAs('public/uploads', $request->file('proof_of_payment')->getClientOriginalName());


            // 4. Call the model to perform eloquent insertion
            $reimbursement = Reimbursement::create([
                'employee_code' => $employeeCode,
                'amount' => (float) str_replace(['PHP ', ','], '', $requestData['amount']), // Convert to float
                'reimbursement_category' => $requestData['reimbursement_category'],
                'or_number' => $requestData['or_number'],
                'remarks' => $requestData['remarks'],
                'proof_of_payment' => $proofOfPaymentPath,
            ]);

            // Return success message as JSON
            return response()->json(['success' => 'Reimbursement created successfully'], 201);
        } catch (\Exception $e) {
            // Return error message as JSON
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Reimbursement $reimbursement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reimbursement $reimbursement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reimbursement $reimbursement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reimbursement $reimbursement)
    {
        //
    }
}
