<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatTipoContenido extends Model
{
    use HasFactory;
    protected $table = 'cat_tipo_contenido';
    protected $guarded = ['cve'];

    public $timestamps = FALSE;
}
