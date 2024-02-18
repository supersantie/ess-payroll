<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EssAccount extends Model
{
    use HasFactory;

    protected $casts = [
        'otp_requested_at' => 'datetime', // Cast otp_requested_at attribute to Carbon instance
    ];

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_code');
    }


}
