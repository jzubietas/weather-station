<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapituloSerie extends Model
{
    use HasFactory;
    protected $table = 'capitulos_serie';
    protected $guarded = ['cve'];
}
