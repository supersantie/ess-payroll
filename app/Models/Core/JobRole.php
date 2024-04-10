<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class JobRole extends Model
{

    use HasFactory;

    protected $connection = 'core';
    protected $table = 'job_roles';

}
