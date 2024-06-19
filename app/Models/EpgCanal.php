<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpgCanal extends Model
{
    use HasFactory;
    protected $table = 'epg_canales';
    protected $guarded = ['epg_canal_id'];
}
