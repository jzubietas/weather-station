<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatFormatoVideo extends Model
{
    use HasFactory;
    protected $table = 'cat_formato_video';
    protected $guarded = ['cve'];
}
