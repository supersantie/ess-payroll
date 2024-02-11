<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cutoff;
use App\Models\Payroll;
use App\Models\Employee;
use App\Models\Attendance;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Exports\AttendancesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\QueryException;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        $attendances = Employee::with(['attendances' => function ($query) {
            $query->where('payroll_status', 'recorded');
        }])->get();

        // dd($attendances);

        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
            'late' => 'bg-danger bg-opacity-10 text-danger',
        ];

        return view('pages.payroll.attendance', compact('employees', 'attendances', 'statusColors'));
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
            $employee = Employee::where('code', $employeeCode)->first();
            $basicDailyRate = $employee->basic_daily_rate;
            $hourRate = $basicDailyRate / 8;

            $dates = $request->date;
            $timeIn = $request->time_in;
            $timeOut = $request->time_out;

            $attendanceRecords = [];

            // Process each attendance record separately
            foreach ($dates as $key => $date) {
                // No need to parse timeIn and timeOut since they are already in the format 'H:i:s'
                $startTime = $timeIn[$key];
                $endTime = $timeOut[$key];

                // Calculate the difference in hours
                $hoursWorked = Carbon::parse($endTime)->diffInHours($startTime);

                // Calculate the earnings for this attendance record
                $earnings = $hoursWorked * $hourRate;

                // Create an array for the current attendance record
                $attendanceRecord = [
                    'employee_code' => $employeeCode,
                    'date' => $date,
                    'time_in' => $startTime,
                    'time_out' => $endTime,
                    'working_hours' => $hoursWorked,
                    'earnings' => $earnings,
                    'status' => 'on time'
                ];

                // Save $attendanceRecord to your database
                // Ensure that the 'employee_code' field is not set to null
                Attendance::create($attendanceRecord);

                // Add the current attendance record array to the larger array
                $attendanceRecords[] = $attendanceRecord;
            }

            // Return a JSON response for your AJAX request
            return response()->json(['attendance_records' => $attendanceRecords], 200);
        } catch (QueryException $e) {
            // Handle the exception (e.g., log the error, return an error response)
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            // Handle other exceptions
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }

    public function export()
    {
        return Excel::download(new AttendancesExport, 'attendances.xlsx');
    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('test.xlsx'));
    }
}
