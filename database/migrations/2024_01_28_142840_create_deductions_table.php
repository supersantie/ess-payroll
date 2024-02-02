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
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->unsignedBigInteger('cutoff_id');
            $table->foreign('cutoff_id')->references('id')->on('cutoffs')->onDelete('cascade');
            $table->double('amount');
            $table->enum('type', ['benefits', 'others']);
            $table->enum('status', ['deducted', 'pending']);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deductions');
    }
};
