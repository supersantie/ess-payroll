<?php

namespace App\Models\Modules\Mssp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $connection = 'mssp';
    protected $table = 'leave_request';

}
