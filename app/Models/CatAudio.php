<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatAudio extends Model
{
    use HasFactory;
    protected $table = 'cat_audio';
    protected $guarded = ['cve'];

    public $timestamps = FALSE;
}
