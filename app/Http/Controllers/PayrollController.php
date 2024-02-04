<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Cutoff;
use App\Models\Payroll;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\PayrollSetting;
use Illuminate\Support\Facades\Mail;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payrolls = Employee::with('payrolls')->get();
        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
            'late' => 'bg-danger bg-opacity-10 text-danger',
        ];

        return view('pages.payroll.reports.payroll', compact('payrolls',));
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

            // Initialize $netPay inside the loop
            $netPay = 0;

            foreach ($overtimeRecords as $overtime) {
                $totalOvertimeHours += $overtime->no_of_hours;
                $overtime->update(['status' => 'processed']);
            }

            // Calculate net pay inside the loop
            $netPay = ($baseSalary / 8 * $totalWorkingHours) + ($baseSalary / 8 * $totalOvertimeHours * ($overtimeRecords->count() > 0 ? $overtimeRecords->first()->rate_percentage / 100 : 0));

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
    public function show(Payroll $payroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payroll $payroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payroll $payroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payroll $payroll)
    {
        //
    }

    public function sendToEmail(Request $request, $id){
        $user = User::findOrFail($id);
        Mail::send("mails.test", ["data"=>"Test Data"], function($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');
 
            $m->to("gcristianber@gmail.com", "Cristianber Gordora")->subject('Test Email');
        });
    }
}
