<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cutoff;
use App\Models\Employee;
use Illuminate\Http\Request;

class PayrollDashboardController extends Controller
{

    public function index()
    {
        $employees = Employee::with(['payrolls', 'companyLoans'])->get();

        $currentMonthEmployeesCount = Employee::whereYear('created_at', '=', Carbon::now()->year)
            ->whereMonth('created_at', '=', Carbon::now()->month)
            ->count();

        $previousReleaseAmounts = $this->getPreviousReleaseAmounts();
        $totalReleasedAmountYear = $this->getTotalReleasedAmountYear();
        $currentMonthReleasedAmount = $this->getCurrentMonthReleasedPay();
        $previousMonthReleasedAmount = $this->getPreviousMonthReleasedPay();

        return view('pages.payroll.index', compact(
            'previousReleaseAmounts',
            'totalReleasedAmountYear',
            'currentMonthReleasedAmount',
            'previousMonthReleasedAmount',
            'employees',
            'currentMonthEmployeesCount'
        ));
    }

    public function getPreviousReleaseAmounts()
    {
        // Get the current year
        $currentYear = Carbon::now()->year;

        // Initialize an array to store the previous release amounts for each month
        $previousReleaseAmounts = [];

        // Loop through each month of the current year
        for ($month = 1; $month <= Carbon::now()->month; $month++) {
            // Get the start and end date of the current month
            $startDate = Carbon::createFromDate($currentYear, $month, 1)->startOfMonth();
            $endDate = Carbon::createFromDate($currentYear, $month, 1)->endOfMonth();

            // Query to fetch cutoff records for the current month
            $cutoffRecords = Cutoff::whereBetween('generated_date', [$startDate, $endDate])->get();

            // Calculate the total released amount for the current month
            $totalReleasedAmount = $cutoffRecords->sum('total_released_amount');

            // Store the total released amount for the current month in the array
            $previousReleaseAmounts[$startDate->format('F')] = $totalReleasedAmount;
        }

        return $previousReleaseAmounts;
    }

    public function getTotalReleasedAmountYear()
    {
        // Get the current year
        $currentYear = Carbon::now()->year;

        // Initialize a variable to store the total released amount through the current year
        $totalReleasedAmountYear = 0;

        // Loop through each month of the current year
        for ($month = 1; $month <= Carbon::now()->month; $month++) {
            // Get the start and end date of the current month
            $startDate = Carbon::createFromDate($currentYear, $month, 1)->startOfMonth();
            $endDate = Carbon::createFromDate($currentYear, $month, 1)->endOfMonth();

            // Query to fetch cutoff records for the current month
            $cutoffRecords = Cutoff::whereBetween('generated_date', [$startDate, $endDate])->get();

            // Calculate the total released amount for the current month
            $totalReleasedAmountYear += $cutoffRecords->sum('total_released_amount');
        }

        return $totalReleasedAmountYear;
    }

    public function getCurrentMonthReleasedPay()
    {
        // Get the current month
        $currentMonth = Carbon::now()->month;

        // Get the start and end date of the current month
        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();

        // Query to fetch cutoff records for the current month
        $currentMonthCutoffRecords = Cutoff::whereBetween('generated_date', [$startDate, $endDate])->get();

        // Calculate the total released amount for the current month
        $currentMonthReleasedAmount = $currentMonthCutoffRecords->sum('total_released_amount');

        return $currentMonthReleasedAmount;
    }

    public function getPreviousMonthReleasedPay()
    {
        // Get the previous month
        $previousMonth = Carbon::now()->subMonth()->month;

        // Get the start and end date of the previous month
        $startDate = Carbon::now()->subMonth()->startOfMonth();
        $endDate = Carbon::now()->subMonth()->endOfMonth();

        // Query to fetch cutoff records for the previous month
        $previousMonthCutoffRecords = Cutoff::whereBetween('generated_date', [$startDate, $endDate])->get();

        // Calculate the total released amount for the previous month
        $previousMonthReleasedAmount = $previousMonthCutoffRecords->sum('total_released_amount');

        return $previousMonthReleasedAmount;
    }
}
