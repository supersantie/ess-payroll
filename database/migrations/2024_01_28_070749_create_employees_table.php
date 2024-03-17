<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->enum('job_role', [
                'Software Engineer',
                'Web Developer',
                'Graphic Designer',
                'Digital Marketer',
                'Customer Service Representative',
                'Accountant',
                'Human Resources Manager',
                'Sales Manager',
                'Project Manager',
                'Content Writer'
            ]);

            $table->double('basic_daily_rate')->required();
            $table->double('monthly_salary')->required();
            $table->string('profile_picture')->nullable();
            $table->string('email')->nullable();

            $table->string('ss_number')->nullable();
            $table->string('pagibig_number')->nullable();

            $table->date('date_hired')->required();
            $table->enum('status', ['full time', 'part time', 'probationary', 'terminated'])->default('probationary');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
