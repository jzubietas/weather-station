<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpgCanalEn extends Model
{
    use HasFactory;
    protected $table = 'epg_canales_en';
    protected $guarded = ['epg_canal_id'];
}
