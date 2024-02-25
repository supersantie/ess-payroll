<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perk extends Model
{
    use HasFactory;

    protected $fillable = ["perk_type", "employee_code", "remarks","amount", "status"];

    public function employee(){
        $this->belongsTo(Employee::class);
    }
}
