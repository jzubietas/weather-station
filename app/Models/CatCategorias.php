<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CatCategorias extends Model
{
    use HasFactory;
    protected $table = 'cat_categorias';
    protected $guarded = ['cve'];
    public $timestamps = FALSE;

    public function type(): HasOne {
		return $this->hasOne(CatTipoContenido::class, 'cve','cve_cat_tipo_contenido');
	}
}
