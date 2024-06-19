<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDispositivoDemo extends Model
{
    use HasFactory;
    protected $table = 't_dispositivos_demo';
    protected $guarded = ['id'];
}
