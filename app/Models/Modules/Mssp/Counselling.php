<?php

namespace App\Models\Modules\Mssp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselling extends Model
{
    use HasFactory;

    protected $connection = 'mssp';
    protected $table = 'counselling_appointment';
    protected $primaryKey = 'appointment_id';
        
    protected $fillable = ["employee_code", "service_id", "appointment_date", "appointment_time", "note", "appointment_status"];
    
    public $timestamps = false;


    public function counsellingService(){
        return $this->belongsTo(CounsellingService::class, 'service_id', 'service_id');
    }

    
}
