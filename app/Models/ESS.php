<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESS extends Model
{
    use HasFactory;


    // public function getRouteKeyName(): string
    // {
    //     return 'code';
    // }

    public function requests()
    {
        return $this->hasMany(ESS::class);
    }
    
    
}
