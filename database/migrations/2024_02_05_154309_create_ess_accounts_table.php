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
        Schema::create('ess_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->string('password');
            $table->string('email')->unique();
            $table->double('outstanding_loan_balance')->default(0);
            $table->string('otp_code')->nullable();
            $table->timestamp('otp_requested_at')->nullable(); // Change this line to define otp_requested_at as timestamp
            $table->string('avatar')->nullable();
            $table->enum('status', ['active', 'deactivated'])->default('active');
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ess_accounts');
    }
};
