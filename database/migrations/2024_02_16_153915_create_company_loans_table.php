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
        Schema::create('company_loans', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->double('amount')->required();
            $table->integer('months_to_be_paid')->required();
            $table->double('amount_to_be_paid')->required();
            $table->enum('loan_repayment', ['Every 1st Cutoff', 'Every 2nd Cutoff']);
            $table->enum('loan_status', ['Pending','Unsettled', 'Paid'])->default('Unsettled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_loans');
    }
};
