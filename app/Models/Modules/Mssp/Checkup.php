<?php

namespace App\Models\Modules\Mssp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{

    use HasFactory;

    protected $connection = 'mssp';
    protected $table = 'checkup_appointment';
    
    protected $fillable = ["employee_code","checkup_date","checkup_time","checkup_type","note"];

    public $timestamps = false;
}
