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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');

            $table->text('reason');
            $table->date('leave_date');
            $table->enum('status', ['approved', 'pending', 'denied'])->default('pending');
            $table->enum('leave_category', ['leave without pay', 'sick', 'vacation', 'maternity', 'birthday']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
