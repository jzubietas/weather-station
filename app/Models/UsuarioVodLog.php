<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioVodLog extends Model
{
    use HasFactory;
    protected $table = 'usuario_vod_log';
    protected $guarded = ['id'];
}
