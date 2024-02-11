<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cutoff extends Model
{
    use HasFactory;

    protected $fillable = [
        "generated_date",
        "start_date",
        "end_date",
        "total_released_amount",
        "payroll_period"
    ];
}
