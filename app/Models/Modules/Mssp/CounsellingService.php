<?php

namespace App\Models\Modules\Mssp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounsellingService extends Model
{
    use HasFactory;

    protected $connection = 'mssp';
    protected $table = 'counselling_service';

    protected $primaryKey = 'service_id';


    public function counselling(){
        return $this->hasOne(Counselling::class, 'service_id', 'service_id');
    }
}
