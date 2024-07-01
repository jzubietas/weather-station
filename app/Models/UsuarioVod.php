<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UsuarioVod extends Model
{
    use HasFactory;
    protected $table = 'usuario_vod';
    protected $guarded = ['cve'];

    public $timestamps = FALSE;

    public function dispositive() : BelongsTo {
		return $this->belongsTo(DispositivoMovil::class, 'movil_id', 'id');
	}
	
	public function client() : HasOne {
		return $this->hasOne(TCliente::class, 'cve', 'cve');
	}
	
	public function user() : BelongsTo {
		return $this->belongsTo(User::class, 'cve_dealer', 'cve');
	}
}
