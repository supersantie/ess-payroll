<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLoan extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = ["employee_code", "amount", "months_to_be_paid", "amount_to_be_paid", "loan_repayment","loan_status"];

    public function employee(){
        $this->belongsTo(\App\Models\Core\Employee::class);
    }

    public function essAccount(){
        $this->belongsTo(\App\Models\Core\Employee::class);
    }
}
