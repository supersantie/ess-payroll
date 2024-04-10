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
        Schema::create('perks', function (Blueprint $table) {
            $table->id();
            $table->enum('perk_type', ['Food Allowance', 'Transportation Allowance','13th Month Pay']);
            // $table->string('employee_code')->index();
            // $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('workfolio_main.employees')->onDelete('cascade');
            $table->text('remarks');
            $table->double('amount');
            $table->enum('status', ['released', 'hold', 'issued']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perks');
    }
};
