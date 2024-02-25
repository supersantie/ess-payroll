<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use App\Models\EssAccount;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Run constant tables
        $this->call([
            PayrollSettingsSeeder::class,
            // EmployeeSeeder::class
        ]);

        // Run test datas
        Employee::factory()->count(5)->hasEssAccount(1)->create();
    }
}
