<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitulo extends Model
{
    use HasFactory;
    protected $table = 'subtitulos';
    protected $guarded = ['cve'];
}
