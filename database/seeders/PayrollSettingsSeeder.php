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
            "system_name" => "",
            "system_description" => "",
            "sss" => "",
            "philhealth" => "",
            "pag_ibig" => "",
            "overtime_rate" => "",
            "regular_rate" => "",
            "holiday_rate" => "",
            "night_diff_rate" => "",
            "payroll_period" => "",
            "contribution_period" => "",
            "loans_period" => "",
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
