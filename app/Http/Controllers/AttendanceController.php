<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cutoff;
use App\Models\Payroll;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\ActivityLog;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Exports\AttendanceExport;
use App\Imports\AttendanceImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\QueryException;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // SELECT * from Employees_tbl 

        $employees = Employee::all();
        $attendances = Employee::with(['attendances' => function ($query) {
            $query->where(function ($query) {
                $query->where('payroll_status', 'recorded')
                    ->orWhere('payroll_status', 'processed');
            });
        }])->whereHas('attendances', function ($query) {
            $query->where(function ($query) {
                $query->where('payroll_status', 'recorded')
                    ->orWhere('payroll_status', 'processed');
            });
        })->get();


        // dd($attendances);

        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
            'late' => 'bg-danger bg-opacity-10 text-danger',
        ];

        $payrollStatusColors = [
            'processed' => 'bg-success text-white text-success',
            'recorded' => 'bg-secondary text-white text-secondary',
        ];

        return view('pages.payroll.attendance', compact('employees', 'attendances', 'statusColors', 'payrollStatusColors'));
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

            foreach ($dates as $key => $date) {

                $startTime = $timeIn[$key];
                $endTime = $timeOut[$key];
            
                // Calculate the total minutes worked
                $totalMinutesWorked = Carbon::parse($endTime)->diffInMinutes($startTime);
            
                // Subtract 1 hour (60 minutes) for break time
                $totalMinutesWorked -= 60;
            
                // Ensure the total minutes worked is not negative
                if ($totalMinutesWorked < 0) {
                    $totalMinutesWorked = 0; // Set to 0 if negative
                }
            
                // Convert minutes worked to hours
                $hoursWorked = $totalMinutesWorked / 60;
            
                // Round the hours worked to one decimal place
                $hoursWorkedRounded = round($hoursWorked, 1);
            
                // Calculate earnings based on the adjusted hours worked
                $earnings = $hoursWorkedRounded * $hourRate;
            
                // Create attendance record
                $attendanceRecord = [
                    'employee_code' => $employeeCode,
                    'date' => $date,
                    'time_in' => $startTime,
                    'time_out' => $endTime,
                    'working_hours' => $hoursWorkedRounded,
                    'earnings' => $earnings,
                    'status' => 'on time'
                ];
            
                // Save attendance record
                Attendance::create($attendanceRecord);
            
                // Add attendance record to array
                $attendanceRecords[] = $attendanceRecord;
            
                // Log activity
                $userEmail = $request->user()->email ?? '';
                $description = 'Attendance record created';
                $ipAddress = $request->ip();
                $actionType = 'create';
            
                ActivityLog::create([
                    'user_email' => $userEmail,
                    'description' => $description,
                    'ip_address' => $ipAddress,
                    'action_type' => $actionType,
                ]);
            }
            
            return response()->json(['attendance_records' => $attendanceRecords], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        //
        try {
            $data = DB::connection('db')->select("select * from employees_tbl WHERE employee_id = 1");
            return response()->json(['success' => true, 'data' => $data], 200);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'data' => $th->getMessage()], 200);
        }
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
        return Excel::download(new AttendanceExport, 'attendances.xlsx');
    }

    public function import(Request $request)
    {
        try {
            ActivityLog::create([
                'user_email' => Auth::user()->email,
                'description' => Auth::user()->name . " imports excel file to Attendance",
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'action_type' => "upload",
            ]);


            $fileData = Excel::toArray(new AttendanceImport, $request->file('file'));
            $errors = (new AttendanceImport())->collection(collect($fileData[0])); // Assuming you are interested in the first sheet

            if (!empty($errors)) {
                return response()->json(["errors" => $errors], 422);
            }

            return response()->json(["success" => "Import attendance success!"]);
        } catch (\Throwable $e) {
            return response()->json(["error" => "Import failed: " . $e->getMessage()], 500);
        }
    }
}
