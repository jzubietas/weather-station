<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpgCanalContenidoEn extends Model
{
    use HasFactory;
    protected $table = 'epg_canal_contenido_en';
    protected $guarded = ['epg_con_id'];
}
