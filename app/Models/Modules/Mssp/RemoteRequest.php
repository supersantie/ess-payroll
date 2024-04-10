<?php

namespace App\Models\Modules\Mssp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemoteRequest extends Model
{
    use HasFactory;

    protected $connection = 'mssp';
    protected $table = 'remote_request';
}
