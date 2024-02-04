<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['employee_code','time_in', 'time_out','working_hours','date','payroll_status'];

    public function employee(){
        $this->belongsTo(Employee::class);
    }
}
