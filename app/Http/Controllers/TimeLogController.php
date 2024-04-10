<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\TimeLog;
use App\Models\Attendance;
use App\Models\Overtime;
use App\Models\PayrollSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class TimeLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $attendances = Attendance::where('employee_code', session('info')->code)->get();

        // dd($employee);

        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
            'late' => 'bg-danger bg-opacity-10 text-danger',
            'processed' => 'bg-success bg-opacity-10 text-success',
        ];

        return view('pages.ess.tna', compact('attendances', 'statusColors'));
    }

    public function overtime()
    {

        $overtimes = Overtime::where('employee_code', session('info')->code)->get();

        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
            'late' => 'bg-danger bg-opacity-10 text-danger',
            'processed' => 'bg-success bg-opacity-10 text-success',
        ];

        return view('pages.ess.overtime', compact('overtimes', 'statusColors'));
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
        if ($request->attendance_type === "Time In") {
            try {
                // Check if there is already an attendance record for today's date
                $existingAttendance = Attendance::where('employee_code', session('info')->code)
                    ->whereDate('date', now()->toDateString())
                    ->first();

                if ($existingAttendance) {
                    return response()->json(['error' => 'Attendance already recorded for today'], 400);
                }

                // Logic for recording Time In
                $attendanceRecord = Attendance::create([
                    'employee_code' => session('info')->code,
                    'date' => now(),
                    'time_in' => now()->toTimeString(),
                    'working_hours' => null, // Set to null initially
                    'status' => null, // Set to null initially
                ]);

                return response()->json(['message' => 'Time In recorded successfully'], 200);
            } catch (QueryException $e) {
                return response()->json(['error' => 'Database error: ' . $e->getMessage()], 500);
            } catch (\Exception $e) {
                return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
            }
        } elseif ($request->attendance_type === "Time Out") {

            try {
                // Logic for recording Time Out
                $employeeCode = session('info')->code; // Assuming you store employee code in the session

                // Find the latest attendance record for the employee
                $latestAttendance = Attendance::where('employee_code', $employeeCode)
                    ->latest('date')
                    ->first();

                // Check if the user has already timed out
                if ($latestAttendance->time_out) {
                    return response()->json(['error' => 'You have already timed out for today'], 400);
                }

                // Update the time_out field of the latest attendance record with the current time
                $latestAttendance->update(['time_out' => now()->format('H:i:s')]);
                // Calculate working hours based on time_in and time_out
                $startTime = Carbon::parse($latestAttendance->time_in);
                $endTime = now();
                $hoursWorked = $endTime->diffInHours($startTime);

                // Update the working_hours field of the latest attendance record
                $latestAttendance->update(['working_hours' => $hoursWorked]);

                // Determine the status based on working hours
                if ($hoursWorked === 8) {
                    $status = 'on time';
                } elseif ($hoursWorked < 8) {
                    $status = 'undertime';
                } else {
                    $status = 'late';
                }

                // Update the status of the attendance record
                $latestAttendance->update(['status' => $status]);

                return response()->json(['message' => 'Time Out recorded successfully'], 200);
            } catch (QueryException $e) {
                return response()->json(['error' => 'Database error: ' . $e->getMessage()], 500);
            } catch (\Exception $e) {
                return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
            }
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(TimeLog $timeLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TimeLog $timeLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TimeLog $timeLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TimeLog $timeLog)
    {
        //
    }
}
