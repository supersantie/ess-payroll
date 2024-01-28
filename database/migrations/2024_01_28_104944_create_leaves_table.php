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
            $table->enum('leave_type', ['vacation', 'maternity', 'birthday', 'bereavement', 'sick']);
            $table->enum('status', ['approved', 'denied', 'pending'])->default('pending');
            $table->string('proof_of_leaving')->nullable();
            $table->text('reason')->required();
            $table->integer('no_of_days');
            $table->date('date_filed');
            $table->date('effectivity_date');
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
