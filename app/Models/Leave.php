<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    
    protected $fillable = ["employee_code","reason","leave_date","status ","leave_category"];

    public function employee(){
        $this->belongsTo(\App\Models\Core\Employee::class);
    }
}
