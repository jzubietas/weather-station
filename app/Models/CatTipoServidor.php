<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatTipoServidor extends Model
{
    use HasFactory;
    protected $table = 'cat_tipo_servidor';
    protected $guarded = ['cve'];
}
