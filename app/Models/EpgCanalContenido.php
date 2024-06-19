<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpgCanalContenido extends Model
{
    use HasFactory;
    protected $table = 'epg_canal_contenido';
    protected $guarded = ['epg_con_id'];
}
