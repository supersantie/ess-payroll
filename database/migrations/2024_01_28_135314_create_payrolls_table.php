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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->double('paid_hours')->default(0.0);
            $table->double('overtime')->default(0.0);
            $table->double('sss')->default(0.0);
            $table->double('phil_health')->default(0.0);
            $table->double('pag_ibig')->default(0.0);
            $table->double('net_pay')->default(0.0);
            $table->dateTime('date_issued')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('status', ['released', 'hold', 'issued'])->default('released');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
