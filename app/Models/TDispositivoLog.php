<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDispositivoLog extends Model
{
    use HasFactory;
    protected $table = 't_dispositivos_log';
    protected $guarded = ['id'];
}
