<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Payroll;
use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $employees = Employee::whereHas('attendances', function ($query) {
            $query->where('payroll_status', '!=', 'processed');
        })->get();

        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
            'late' => 'bg-danger bg-opacity-10 text-danger',
        ];
        //
        return view('pages.payroll.attendance', compact('employees', 'statusColors'));
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
        $currentDate = Carbon::now();
        $startOfMonth = $currentDate->clone()->startOfMonth();
        $endOfMonth = $currentDate->clone()->endOfMonth();

        $employeeIds = $request->employeeIds;
        $employees = Employee::with('attendances')->whereIn('code', $employeeIds)->get();

        foreach ($employees as $employee) {
            $employeeId = $employee->code;

            $attendanceRecords = $employee->attendances;

            $totalWorkingHours = 0;
            $baseSalary = $employee->basic_daily_rate;

            foreach ($attendanceRecords as $record) {
                $totalWorkingHours += $record->working_hours;

                // I want to update the payroll status of each record to 'processed'
                $record->update(['payroll_status' => 'processed']);
            }

            $hourRate = $baseSalary / 8;

            $netPay = $hourRate * $totalWorkingHours;

            Payroll::create([
                "employee_code" => $employeeId,
                "paid_hours" => $totalWorkingHours,
                "net_pay" => $netPay,
                "start_date" => $startOfMonth,
            ]);

            echo "NetPay:" . $netPay;
            echo "Payroll Released!";
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
}
