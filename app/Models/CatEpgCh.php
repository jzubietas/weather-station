<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatEpgCh extends Model
{
    use HasFactory;
    protected $table = 'cat_epg_ch';
    protected $guarded = ['cve'];
}
