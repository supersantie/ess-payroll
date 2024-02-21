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
            
            "cut_off_period" => "Semi Monthly",

            "night_diff_rate" => 0.25, 
            "night_shift_start_time" => "19:00", // 7:00 PM
            "night_shift_end_time" => "21:00", // 9:00 PM

            "overtime_rate" => 0.25, // 25% per hour worked
            "regular_holiday_rate" => 0.25,
            "special_holiday_rate" => 0.30,

            "philhealth_contribution_percentage" => 0.5, // 5% - based on the monthly salary of employee
            "pag_ibig_contribution_percentage" => 200, // PHP 200 - Monthly contribution
            "sss_ee_percentage" => 0.045, // 4.5% - Employee Share based on the monthly salary of employee
            "sss_er_percentage" => 0.095, // 9.5% - Employer Share  based on the monthly salary of employee
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
