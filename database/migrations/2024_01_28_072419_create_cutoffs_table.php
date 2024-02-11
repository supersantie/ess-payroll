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
        Schema::create('cutoffs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('generated_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->double('total_released_amount');
            $table->enum('payroll_period', ['1st cutoff', '2nd cutoff']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutoffs');
    }
};
