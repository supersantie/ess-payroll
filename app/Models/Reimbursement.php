<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reimbursement extends Model
{
    use HasFactory;

    protected $fillable = ["employee_code","amount","or_number","proof_of_payment","remarks","status","reimbursement_category"];
}
