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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            // $table->string('employee_code')->index();
            // $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('workfolio_main.employees')->onDelete('cascade');

            $table->string('loan_account_number')->required();
            $table->integer('months_to_pay');
            $table->double('amount')->required();
            $table->double('amount_to_be_paid')->default(0);

            $table->enum("government_benefit_type",["sss", "pag_ibig"]);
            $table->enum("loan_type",["Salary Loan", "Calamity Loan", "Housing Loan", "Educational Loan"]);
            $table->enum("status",["On going", "Finished"])->default('On going');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
