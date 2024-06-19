<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioVod extends Model
{
    use HasFactory;
    protected $table = 'usuario_vod';
    protected $guarded = ['cve'];
}
