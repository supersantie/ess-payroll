<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EssRequests extends Model
{
    use HasFactory;

    protected $fillable = ["employee_code", "status", "description", "file", "created_at", "updated_at"];
    
    public function requests()
    {
        return $this->belongsTo(ESS::class);
    }
}