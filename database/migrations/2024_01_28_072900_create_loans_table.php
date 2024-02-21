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
            $table->string('employee_code')->index();
            $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');

            $table->string('loan_account_number')->required();


            $table->integer('months_to_pay');

            $table->double('outstanding_balance')->default(0);
            $table->double('total_amount_to_pay_monthly')->default(0);

            $table->enum("government_benefit_type",["sss", "pag_ibig"]);
            $table->enum("loan_type",["Salary Loan", "Calamity Loan", "Housing Loan", "Educational Loan"]);
            $table->enum("statis",["On going", "Finished"]);
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
