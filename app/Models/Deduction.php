<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    public function employee(){
        $this->belongsTo(Employee::class);
    }

    public function cutoffs(){
        return $this->hasMany(Cutoff::class, 'id');
    }
}
