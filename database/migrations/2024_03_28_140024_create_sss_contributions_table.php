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
        Schema::create('sss_contributions', function (Blueprint $table) {
            $table->id();
            $table->string('range_compensation');
            $table->double('ee_amount_contribution'); // # Employee
            $table->double('er_amount_contribution'); // # Employer
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sss_contribution');
    }
};
