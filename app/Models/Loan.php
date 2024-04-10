<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $connection = "mysql";
    protected $fillable = ["employee_code","loan_account_number", "amount", "months_to_pay", "amount_to_be_paid", "loan_type", "government_benefit_type"];

        public function employee(){
        $this->belongsTo(\App\Models\Core\Employee::class);
    }
}
