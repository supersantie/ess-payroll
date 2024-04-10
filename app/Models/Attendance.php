<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'attendances';
    protected $fillable = ['employee_code','time_in', 'time_out','working_hours','date','payroll_status', 'status'];

    public function employee(){
        return $this->belongsTo(\App\Models\Core\Employee::class);
    }
}
