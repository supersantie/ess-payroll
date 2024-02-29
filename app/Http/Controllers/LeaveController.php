<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $leaves = Leave::where('employee_code', session('info')->code)->get();
        $statusColors = [
            'approved' => 'bg-success bg-opacity-10 text-success',
            'pending' => 'bg-warning bg-opacity-10 text-warning',
            'denied' => 'bg-danger bg-opacity-10 text-danger',
        ];

        // dd($leaves);

        return view('pages.ess.leave', compact('leaves', 'statusColors'));
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
        // Validate the request data.
        $validator = Validator::make($request->all(), [
            'leave_date' => 'required|date',
            'leave_category' => 'required',
            'reason' => 'required',
        ]);

        // If validation fails, return error response.
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400);
        }

        // Check if the date is a duplicate entry in the database.
        $duplicateLeave = Leave::where('leave_date', $request->leave_date)
            ->where('employee_code', session('info')->code)
            ->first();

        if ($duplicateLeave) {
            return response()->json(['error' => 'Leave request for this date already exists.'], 400);
        }

        // Check if the leave date is in the past.
        $leaveDate = $request->input('leave_date');
        $currentDate = now()->toDateString();

        if ($leaveDate < $currentDate) {
            return response()->json(['error' => 'You cannot file a leave request for a past date.'], 400);
        }

        // Check if the user has 3 previous pending leave requests.
        $pendingLeaveCount = Leave::where('employee_code', session('info')->code)
            ->where('status', 'pending')
            ->count();

        if ($pendingLeaveCount >= 3) {
            return response()->json(['error' => 'You have exceeded the limit of 3 pending leave requests.'], 400);
        }

        try {
            // Create leave request.
            Leave::create([
                'employee_code' => session('info')->code,
                'leave_date' => $leaveDate,
                'leave_category' => $request->leave_category,
                'reason' => $request->reason,
            ]);

            return response()->json(['success' => 'Leave request created successfully.'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $leave)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leave)
    {
        //
    }
}
