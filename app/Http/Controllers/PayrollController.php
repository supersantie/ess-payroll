<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Cutoff;
use App\Models\Payroll;
use App\Models\Employee;
use App\Models\ActivityLog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PayrollSetting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $payrolls = Employee::with(['payrolls', 'companyLoans' => function ($query) {
            $query->where('loan_status', 'Unsettled');
        }])->get();

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

        /*
            TODO:
            - Check if the employee has previous unsettled loan from company
            - Throw error if have previous loan
            

        */

        $currentDate = now();
        $startOfMonth = $currentDate->clone()->startOfMonth();
        $endOfMonth = $currentDate->clone()->endOfMonth();

        $startOfMonth->startOfMonth()->weekday() === Carbon::SUNDAY && $startOfMonth->addWeekday(); // Skip Sunday
        $startOfMonth->startOfMonth()->weekday() === Carbon::SATURDAY && $startOfMonth->addWeekday(2); // Skip Saturday

        $endOfMonth->endOfMonth()->weekday() === Carbon::SATURDAY && $endOfMonth->subWeekday(); // Skip Saturday
        $endOfMonth->endOfMonth()->weekday() === Carbon::SUNDAY && $endOfMonth->subWeekday(2); // Skip Sunday

        $employeeIds = $request->employeeIds;
        $employees = Employee::with(['attendances', 'overtimes', 'companyLoans' => function ($query) {
            $query->where('loan_status', 'Unsettled');
        }])->whereIn('code', $employeeIds)->get();

        $previousCutoff = Cutoff::orderBy('generated_date', 'desc')->first();
        $loanAmount = 0.00;
        $totalReleasedPay = 0;

        foreach ($employees as $employee) {
            $employeeId = $employee->code;

            // Process company loan
            $employeeCompanyLoan = $employee->companyLoans->first();
            $employeeLoanAmount = $employee->companyLoans->first()->amount_to_be_paid;

            if (!$previousCutoff || $previousCutoff->payroll_period === '2nd cutoff') {
                $payrollPeriod = '1st cutoff';
            } else {
                $payrollPeriod = '2nd cutoff';
            }

            if (Str::of($employeeCompanyLoan->loan_repayment)->replaceFirst("Every ", "")->lower()->value == $payrollPeriod) {
                $loanAmount =  $employeeLoanAmount;
                $employeeCompanyLoan->update(["loan_status"=>"Paid"]);
            }

            // Process attendance and overtime
            $attendanceRecords = $employee->attendances()->where('payroll_status', '!=', 'processed')->get();
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

            // Calculate net pay
            $netPay = ($baseSalary / 8 * $totalWorkingHours) + ($baseSalary / 8 * $totalOvertimeHours * ($overtimeRecords->count() > 0 ? $overtimeRecords->first()->rate_percentage / 100 : 0));

            $netPayAfterLoan = $netPay - $loanAmount;

            // Create payroll record
            Payroll::create([
                "employee_code" => $employeeId,
                "paid_hours" => $totalWorkingHours,
                "overtime" => $totalOvertimeHours,
                "company_loan" => $loanAmount,
                "net_pay" => $netPayAfterLoan,
                "start_date" => $startOfMonth,
                "end_date" => $endOfMonth,
            ]);

            $totalReleasedPay += $netPay;

            echo "Payroll Released!";
        }

        // Create cutoff record
        if (!$previousCutoff || $previousCutoff->payroll_period === '2nd cutoff') {
            $payrollPeriod = '1st cutoff';
            Log::info('Setting payroll period to 1st cutoff');
        } else {
            $payrollPeriod = '2nd cutoff';
            Log::info('Setting payroll period to 2nd cutoff');
        }

        Cutoff::create([
            "generated_date" => $currentDate,
            "start_date" => $startOfMonth,
            "end_date" => $endOfMonth,
            "payroll_period" => $payrollPeriod,
            "total_released_amount" => $totalReleasedPay
        ]);

        echo "Total Released Pay: " . $totalReleasedPay;

        // Log activity
        $userEmail = $request->user()->email ?? '';
        $description = 'Payroll released for ' . $payrollPeriod . ' with total amount of ' . $totalReleasedPay;
        $ipAddress = $request->ip();
        $actionType = 'create';

        ActivityLog::create([
            'user_email' => $userEmail,
            'description' => $description,
            'ip_address' => $ipAddress,
            'action_type' => $actionType,
        ]);
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

    public function sendToEmail(Request $request, $id)
    {
        $user = User::findOrFail($id);
        Mail::send("mails.test", ["data" => "Test Data"], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to("gcristianber@gmail.com", "Cristianber Gordora")->subject('Test Email');
        });
    }
}
