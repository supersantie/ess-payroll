<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Employee;
use App\Models\Overtime;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class OvertimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = \App\Models\Core\Employee::with('overtimes')->get();

        // dd($employees);
        // foreach($employees as $employee){
        //     dd($employee->overtimes);
        // }

        $statusColors = [
            'approved' => 'bg-success bg-opacity-10 text-success',
            'pending' => 'bg-warning bg-opacity-10 text-warning',
            'declined' => 'bg-danger bg-opacity-10 text-danger',
        ];

        return view('pages.payroll.overtime',compact('employees' , 'statusColors'));
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
            $currentDate = now();
            $employeeCode = $request->employee;

            $dates = $request->date;
            $timeIn = $request->time_in;
            $timeOut = $request->time_out;

            $overtimeRecords = [];

            foreach ($dates as $key => $date) {
                $startTime = $timeIn[$key];
                $endTime = $timeOut[$key];

                $hoursWorked = Carbon::parse($endTime)->diffInHours($startTime);

                $overtimeRecord = [
                    'employee_code' => $employeeCode,
                    'date_issued' => $currentDate,
                    'no_of_hours' => $hoursWorked,
                    'rate_percentage' => 25,
                    'status' => 'pending'
                ];

                Overtime::create($overtimeRecord);

                $overtimeRecords[] = $overtimeRecord;
            }

            // Return a JSON response for your AJAX request
            return response()->json(['attendance_records' => $overtimeRecords], 200);
        } catch (QueryException $e) {
            // Handle the exception (e.g., log the error, return an error response)
            return response()->json(['error' => $e], 500);
        } catch (\Exception $e) {
            // Handle other exceptions
            return response()->json(['error' => $e], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Overtime $overtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Overtime $overtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Overtime $overtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Overtime $overtime)
    {
        //
    }
}
