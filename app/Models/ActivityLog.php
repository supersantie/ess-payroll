<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = ["user_email", "description", "action_date", "time_elapsed", "ip_address", "action_type"];
    
    public function user(){
        $this->belongsTo(User::class, 'user_email');
    }
}
