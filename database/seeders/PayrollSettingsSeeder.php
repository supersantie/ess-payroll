<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayrollSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $payrollSettings = [
            "system_name" => "Workfolio",
            "system_description" => "Workfolio - Automated Payroll & Employee Self Service",

            "regular_start_time" => "09:00", // Standard Time In
            "regular_end_time" => "18:00", // Standard Time Out
            
            "overtime_start_time" => "19:00", // Standard Time Out
            "overtime_end_time" => "21:00", // Standard Time Out
            
            "cut_off_period" => "2nd cutoff",
            "contribution_period" => "2nd cutoff",
            "loan_repayment_period" => "2nd cutoff",

            // Nullable if not 2nd cutoff
            "1st_cut_off_date_start" => 1,
            "1st_cut_off_date_end" => 15,
            
            "2nd_cut_off_date_start" => 16,
            "2nd_cut_off_date_end" => 31,


            "night_diff_rate" => 0.25, 
            "night_shift_start_time" => "19:00", // 7:00 PM
            "night_shift_end_time" => "21:00", // 9:00 PM

            "overtime_rate" => 0.25, // 25% per hour worked
            "regular_holiday_rate" => 0.25,
            "special_holiday_rate" => 0.30,

            "philhealth_contribution_percentage" => 0.5, // 5% - based on the monthly salary of employee
            "pag_ibig_contribution_amount" => 200, // PHP 200 - Monthly contribution
            "sss_ee_percentage" => 0.45, // 4.5% - Employee Share based on the monthly salary of employee
            "sss_er_percentage" => 0.95, // 9.5% - Employer Share  based on the monthly salary of employee
        ];

        foreach ($payrollSettings as $key => $value) {
            \App\Models\PayrollSetting::factory()->create(
                [
                    "key" => $key,
                    "value"=>$value
                ]
            );
        }
    }
}
