<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contenido extends Model
{
    use HasFactory;
    protected $table = 'contenido';
    protected $guarded = ['cve'];
    public $timestamps = FALSE;

    public function categories() : BelongsTo  {
		return $this->BelongsTo(CatCategorias::class, 'cve_cat_categoria', 'cve');
	}

	public function type() : BelongsTo  {
		return $this->BelongsTo(CatTipoContenido::class, 'cve_cat_tipo_contenido', 'cve');
	}

	/*public function synopsis() : BelongsTo  {
		return $this->BelongsTo(Sinopsis::class, 'cve_contenido', 'cve');
	}*/

	public function audio() : BelongsTo  {
		return $this->BelongsTo(CatAudio::class, 'cve_cat_audio', 'cve');
	}
	
	public function quality() : BelongsTo  {
		return $this->BelongsTo(CatAudio::class, 'cve_cat_calidad', 'cve');
	}


}
