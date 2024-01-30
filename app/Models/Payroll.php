<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_code',
        'paid_hours',
        'overtime',
        'sss',
        'phil_health',
        'pag_ibig',
        'net_pay',
        'date_issued',
        'start_date',
        'end_date',
        'status',
    ];
}
