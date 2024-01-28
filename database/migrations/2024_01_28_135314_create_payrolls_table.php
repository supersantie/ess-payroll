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
            $table->double('paid_hours');
            $table->double('overtime');
            $table->double('sss');
            $table->double('phil_health');
            $table->double('pag_ibig');
            $table->double('net_pay');
            $table->dateTime('date_issued');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->enum('status', ['released', 'hold', 'issued']);
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
