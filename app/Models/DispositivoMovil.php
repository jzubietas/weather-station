<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DispositivoMovil extends Model
{
    use HasFactory;
    protected $table = 'dispositivo_movil';
    protected $guarded = ['id'];
}
