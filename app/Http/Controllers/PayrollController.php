<?php

namespace App\Http\Controllers;

use App\Exports\PayrollExport;
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
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\QueryException;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $payrolls = Employee::with(['payrolls', 'companyLoans'])->get();

        // foreach($payrolls as $item){
        //     dd($item->payrolls);
        // }

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
    // public function store(Request $request)
    // {

    //     try {

    //         /**
    //          * 
    //          * TODO:
    //          * 
    //          * - Deduct (-1) to the worked hours to get the 8 hrs then compute the man-day of the employee. -1 means the lunch break is excluded.
    //          * 
    //          * - Start & End time should be based on the PayrollSetting::class because i have a table with key-value pairs there like this:
    //          *   [
    //          *      "regular_start_time" => "09:00",
    //          *      "regular_end_time" => "18:00",
    //          *   ]
    //          *   This is using a 24hr format.
    //          * 
    //          * - In the if statement below that checks if($payrollPeriod == '2nd cutoff'){...} to do that. Call the PayrollSetting and get the value $keySetting[$setting->key] = $setting->value; like this.
    //          * 
    //          * 
    //          * 
    //          * 
    //          */


    //         $currentDate = now();
    //         $startOfMonth = $currentDate->clone()->startOfMonth();
    //         $endOfMonth = $currentDate->clone()->endOfMonth();

    //         $startOfMonth->startOfMonth()->weekday() === Carbon::SUNDAY && $startOfMonth->addWeekday(); // Skip Sunday
    //         $startOfMonth->startOfMonth()->weekday() === Carbon::SATURDAY && $startOfMonth->addWeekday(2); // Skip Saturday

    //         $endOfMonth->endOfMonth()->weekday() === Carbon::SATURDAY && $endOfMonth->subWeekday(); // Skip Saturday
    //         $endOfMonth->endOfMonth()->weekday() === Carbon::SUNDAY && $endOfMonth->subWeekday(2); // Skip Sunday

    //         $employeeIds = $request->employeeIds;
    //         $employees = Employee::with(['attendances', 'overtimes', 'companyLoans' => function ($query) {
    //             $query->where('loan_status', 'Unsettled');
    //         }])->whereIn('code', $employeeIds)->get();

    //         $previousCutoff = Cutoff::orderBy('generated_date', 'desc')->first();
    //         $loanAmount = 0.00;
    //         $totalReleasedPay = 0;

    //         foreach ($employees as $employee) {
    //             $employeeId = $employee->code;
    //             $employeeCompanyLoan = $employee->companyLoans->first();
    //             $employeeLoanAmount = $employee->companyLoans->first()->amount_to_be_paid ?? 0;

    //             if (!$previousCutoff || $previousCutoff->payroll_period === '2nd cutoff') {
    //                 $payrollPeriod = '1st cutoff';
    //             } else {
    //                 $payrollPeriod = '2nd cutoff';
    //             }

    //             if (!empty($employeeCompanyLoan->loan_repayment)) {
    //                 if (Str::of($employeeCompanyLoan->loan_repayment)->replaceFirst("Every ", "")->lower()->value == $payrollPeriod) {
    //                     $loanAmount =  $employeeLoanAmount;
    //                     $employeeCompanyLoan->update(["loan_status" => "Paid"]);
    //                 }
    //             }

    //             $attendanceRecords = $employee->attendances()->where('payroll_status', '!=', 'processed')->get();
    //             $overtimeRecords = $employee->overtimes;
    //             $totalWorkingHours = 0;
    //             $totalOvertimeHours = 0;
    //             $baseSalary = $employee->basic_daily_rate;

    //             foreach ($attendanceRecords as $record) {
    //                 $totalWorkingHours += $record->working_hours;
    //                 $record->update(['payroll_status' => 'processed']);
    //             }

    //             foreach ($overtimeRecords as $overtime) {
    //                 $totalOvertimeHours += $overtime->no_of_hours;
    //                 $overtime->update(['status' => 'processed']);
    //             }

    //             $netPay = ($baseSalary / 8 * $totalWorkingHours) + ($baseSalary / 8 * $totalOvertimeHours * ($overtimeRecords->count() > 0 ? $overtimeRecords->first()->rate_percentage / 100 : 0));

    //             $netPayAfterLoan = $netPay - $loanAmount;

    //             $sssContribution = 0;
    //             $pagibigContribution = 0;
    //             $philhealthContribution = 0;

    //             if($payrollPeriod == '2nd cutoff')
    //             {
    //                 $sssContribution = $employee->basic_daily_rate * 0.45;
    //                 $pagibigContribution = 200;
    //                 $philhealthContribution = $employee->basic_daily_rate * 0.5;

    //                 $totalContributionDeduction = $sssContribution + $pagibigContribution + $philhealthContribution;

    //                 $netPay = $netPayAfterLoan - $totalContributionDeduction;
    //             }

    //             // Create payroll record
    //             Payroll::create([
    //                 "employee_code" => $employeeId,
    //                 "paid_hours" => $totalWorkingHours,
    //                 "overtime" => $totalOvertimeHours,
    //                 "company_loan" => $loanAmount,
    //                 "sss" => $sssContribution,
    //                 "phil_health" => $philhealthContribution,
    //                 "pag_ibig" => $pagibigContribution,
    //                 "net_pay" => $netPay,
    //                 "start_date" => $startOfMonth,
    //                 "end_date" => $endOfMonth,
    //             ]);

    //             $totalReleasedPay += $netPay;
    //         }

    //         if (!$previousCutoff || $previousCutoff->payroll_period === '2nd cutoff') {
    //             $payrollPeriod = '1st cutoff';
    //             Log::info('Setting payroll period to 1st cutoff');
    //         } else {
    //             $payrollPeriod = '2nd cutoff';

    //             Log::info('Setting payroll period to 2nd cutoff');
    //         }

    //         Cutoff::create([
    //             "generated_date" => $currentDate,
    //             "start_date" => $startOfMonth,
    //             "end_date" => $endOfMonth,
    //             "payroll_period" => $payrollPeriod,
    //             "total_released_amount" => $totalReleasedPay - $loanAmount
    //         ]);

    //         $userEmail = $request->user()->email ?? '';
    //         $description = 'Payroll released for ' . $payrollPeriod . ' with total amount of ' . $totalReleasedPay;
    //         $ipAddress = $request->ip();
    //         $actionType = 'create';

    //         ActivityLog::create([
    //             'user_email' => $userEmail,
    //             'description' => $description,
    //             'ip_address' => $ipAddress,
    //             'action_type' => $actionType,
    //         ]);
    //         return response()->json(['cutoff_release' => "Cutoff released successful!"], 200);
    //     } catch (QueryException $e) {
    //         return response()->json(['error' => 'Database error'], 500);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'An error occurred'], 500);
    //     }
    // }

    public function store(Request $request)
    {

        /**
         * 
         * TODO:
         * Based on the current date get the current period after that then compute the total working hours and pay for the cutoff start date and cut off end date.
         * 
         * 
         */

        try {
            $payrollSettings = PayrollSetting::pluck('value', 'key')->toArray();

            $currentDate = now();

            $startOfMonth = $currentDate->copy()->startOfMonth();
            $endOfMonth = $currentDate->copy()->endOfMonth();

            $payrollPeriod = $payrollSettings['cut_off_period'];

            $year = $currentDate->year;
            $month = $currentDate->month;

            $currentPeriod = null;
            $firstCutoffDayStart = Carbon::create($year, $month, $payrollSettings['1st_cut_off_date_start'])->startOfDay();
            $firstCutoffDayEnd = Carbon::create($year, $month, $payrollSettings['1st_cut_off_date_end'])->endOfDay();
            $secondCutoffDayStart = Carbon::create($year, $month, $payrollSettings['2nd_cut_off_date_start'])->startOfDay();
            $secondCutoffDayEnd = Carbon::create($year, $month, $payrollSettings['2nd_cut_off_date_end'])->endOfDay();

            $cutoffStart = null;
            $cutoffEnd = null;

            if ($currentDate->between($firstCutoffDayStart, $firstCutoffDayEnd)) {
                $currentPeriod = '1st cutoff';
                $cutoffStart = $firstCutoffDayStart;
                $cutoffEnd = $firstCutoffDayEnd;
            } elseif ($currentDate->between($secondCutoffDayStart, $secondCutoffDayEnd)) {
                $currentPeriod = '2nd cutoff';
                $cutoffStart = $secondCutoffDayStart;
                $cutoffEnd = $secondCutoffDayEnd;
            } else {
                $currentPeriod = 'Default Period';
            }

            $employeeIds = $request->employeeIds;
            $employees = Employee::with(['attendances', 'overtimes', 'companyLoans' => function ($query) {
                $query->where('loan_status', 'Unsettled');
            }])->whereIn('code', $employeeIds)->get();

            $loanAmount = 0.00;
            $totalReleasedPay = 0.00;

            foreach ($employees as $employee) {
                $employeeId = $employee->code;
                $employeeCompanyLoan = $employee->companyLoans->first();
                $employeeLoanAmount = $employee->companyLoans->first()->amount_to_be_paid ?? 0;


                if (!empty($employeeCompanyLoan->loan_repayment)) {
                    if (Str::of($employeeCompanyLoan->loan_repayment)->replaceFirst("Every ", "")->lower()->value == $payrollPeriod) {
                        $loanAmount =  $employeeLoanAmount;
                        $employeeCompanyLoan->update(["loan_status" => "Paid"]);
                    }
                }

                $attendanceRecords = $employee->attendances()->where('payroll_status', '!=', 'processed')->get();
                $overtimeRecords = $employee->overtimes;
                $totalWorkingHours = 0.0;
                $totalOvertimeHours = 0.0;
                $baseSalary = $employee->basic_daily_rate;

                foreach ($attendanceRecords as $record) {
                    if ($record->payroll_status != 'processed') {
                        $totalWorkingHours += $record->working_hours;
                        $record->update(['payroll_status' => 'processed']);
                    }
                }

                foreach ($overtimeRecords as $overtime) {
                    $totalOvertimeHours += $overtime->no_of_hours;
                    $overtime->update(['status' => 'processed']);
                }

                $netPay = ($baseSalary / 8 * $totalWorkingHours) + ($baseSalary / 8 * $totalOvertimeHours * ($overtimeRecords->count() > 0 ? $overtimeRecords->first()->rate_percentage / 100 : 0));

                $netPayAfterLoan = $netPay - $loanAmount;

                $sssContribution = 0;
                $pagibigContribution = 0;
                $philhealthContribution = 0;

                if ($currentPeriod == $payrollSettings['contribution_period']) {
                    if ($netPay >= 0) {
                        $sssContribution = $employee->basic_daily_rate * doubleval($payrollSettings['sss_ee_percentage']);
                        $pagibigContribution = intval($payrollSettings['pag_ibig_contribution_amount']);
                        $philhealthContribution = $employee->basic_daily_rate * doubleval($payrollSettings['philhealth_contribution_percentage']);

                        $totalContributionDeduction = $sssContribution + $pagibigContribution + $philhealthContribution;

                        $netPay = $netPayAfterLoan - $totalContributionDeduction;
                    }
                }

                Payroll::create([
                    "employee_code" => $employeeId,
                    "paid_hours" => $totalWorkingHours,
                    "overtime" => $totalOvertimeHours,
                    "company_loan" => $loanAmount,
                    "sss" => $sssContribution,
                    "phil_health" => $philhealthContribution,
                    "pag_ibig" => $pagibigContribution,
                    "net_pay" => $netPay,
                    "start_date" => $cutoffStart,
                    "end_date" => $cutoffEnd,
                ]);

                $totalReleasedPay += $netPay;
            }


            Cutoff::create([
                "generated_date" => $currentDate,
                "start_date" => $startOfMonth,
                "end_date" => $endOfMonth,
                "payroll_period" => $payrollPeriod,
                "total_released_amount" => $totalReleasedPay - $loanAmount
            ]);

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
            return response()->json(['cutoff_release' => "Cutoff released successful!"], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => $e], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
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

    public function export()
    {
        $currentDate = Carbon::now()->format('m-d-Y');
        $fileName = $currentDate . "-payroll.xlsx"; // Specify the file extension

        // dd(Payroll::with('employee')->get());

        // dd(Employee::with('payrolls')->get());
        return Excel::download(new PayrollExport, $fileName);

        // dd("test");
    }
}
