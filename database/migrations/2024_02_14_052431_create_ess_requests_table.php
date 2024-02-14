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
        Schema::create('ess_requests', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->string('request_type');
            $table->enum('status', ['pending', 'denied', 'approved', 'in-process', 'done']);
            $table->string('description')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ess_requests');
    }
};
