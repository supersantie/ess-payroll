<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
class Certificate extends Model
{
    use HasFactory;

    protected $fillable = ["employee_code","reason_type","remarks","status"];

    protected $fillable = ["employee_code","reason_type","remarks","status"];

    public function employee(){
        $this->belongsTo(\App\Models\Core\Employee::class);
    }
}
