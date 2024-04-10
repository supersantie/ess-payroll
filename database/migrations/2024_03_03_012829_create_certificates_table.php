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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->enum('certificate_type', ['Certificate of Employment']);
            // $table->string('employee_code')->index();
            // $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('workfolio_main.employees')->onDelete('cascade');
            $table->enum('reason_type', ['Personal', 'Education', 'Government']);
            $table->text('remarks');
            $table->enum('status', ['approve','denied','for clearance', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
