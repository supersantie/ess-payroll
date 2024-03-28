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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->time('time_in')->nullable();
            $table->time('time_out')->nullable();
            $table->double('working_hours')->nullable();
            $table->enum('status', ['on time', 'undertime', 'late', 'on leave'])->nullable();
            $table->date('date');
            $table->enum('payroll_status', ['recorded', 'processed'])->default('recorded');
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
