<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiDispositivo extends Model
{
    use HasFactory;
    protected $table = 'api_dispositivos';
    protected $guarded = ['id'];
}
