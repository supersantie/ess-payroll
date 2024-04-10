<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $fillable = ["employee_code","status","no_of_hours","rate_percentage","rate_percentage","date_issued"];
    
    public function employee(){
        $this->belongsTo(\App\Models\Core\Employee::class);
    }


}
