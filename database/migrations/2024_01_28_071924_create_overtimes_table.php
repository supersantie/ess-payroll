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
        Schema::create('overtimes', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->index();
            $table->integer('no_of_hours');
            $table->double('rate_percentage');
            $table->dateTime('date_issued');
            $table->enum('status', ['approved', 'denied', 'pending'])->default('pending');
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overtimes');
    }
};
