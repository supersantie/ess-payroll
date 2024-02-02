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
        $currentDate = now();
        $startOfMonth = $currentDate->clone()->startOfMonth();
        $endOfMonth = $currentDate->clone()->endOfMonth();

        // Adjust start date to skip weekends
        $startOfMonth->startOfMonth()->weekday() === Carbon::SUNDAY && $startOfMonth->addWeekday(); // Skip Sunday
        $startOfMonth->startOfMonth()->weekday() === Carbon::SATURDAY && $startOfMonth->addWeekday(2); // Skip Saturday

        // Adjust end date to skip weekends
        $endOfMonth->endOfMonth()->weekday() === Carbon::SATURDAY && $endOfMonth->subWeekday(); // Skip Saturday
        $endOfMonth->endOfMonth()->weekday() === Carbon::SUNDAY && $endOfMonth->subWeekday(2); // Skip Sunday

        $employeeIds = $request->employeeIds;
        $employees = Employee::with(['attendances', 'overtimes'])->whereIn('code', $employeeIds)->get();

        $totalReleasedPay = 0;
        foreach ($employees as $employee) {
            $employeeId = $employee->code;

            $attendanceRecords = $employee->attendances;
            $overtimeRecords = $employee->overtimes;

            $totalWorkingHours = 0;
            $totalOvertimeHours = 0;

            $baseSalary = $employee->basic_daily_rate;

            foreach ($attendanceRecords as $record) {
                $totalWorkingHours += $record->working_hours;
                $record->update(['payroll_status' => 'processed']);
            }

            foreach ($overtimeRecords as $overtime) {
                $totalOvertimeHours += $overtime->no_of_hours;
                $overtime->update(['status' => 'processed']);
            }

            $hourRate = $baseSalary / 8;

            $netPay = ($hourRate * $totalWorkingHours) + ($hourRate * $totalOvertimeHours * ($overtime->rate_percentage / 100));

            Payroll::create([
                "employee_code" => $employeeId,
                "paid_hours" => $totalWorkingHours,
                "overtime" => $totalOvertimeHours,
                "net_pay" => $netPay,
                "start_date" => $startOfMonth,
                "end_date" => $endOfMonth,
            ]);

            $totalReleasedPay += $netPay;

            echo "Payroll Released!";
        }

        Cutoff::create([
            "generated_date" => $currentDate,
            "start_date" => $startOfMonth,
            "end_date" => $endOfMonth,
            "total_released_amount" => $totalReleasedPay
        ]);

        echo "Total Released Pay: " . $totalReleasedPay;
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
