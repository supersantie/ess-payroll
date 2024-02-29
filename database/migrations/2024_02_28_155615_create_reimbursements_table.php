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
        Schema::create('reimbursements', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');

            $table->double('amount');
            $table->string('or_number');
            $table->string('proof_of_payment');
            $table->text('remarks');
            $table->enum('status', ['approved', 'pending', 'denied'])->default('pending');
            $table->enum('reimbursement_category', ['miscellaneous', 'travel', 'transportation', 'office supplies', 'meal']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reimbursements');
    }
};
