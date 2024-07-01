<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TCliente extends Model
{
    use HasFactory;
    protected $table = 't_clientes';
    protected $guarded = ['cve'];
    public $timestamps = FALSE;

    public function devices() : HasOne  {
		return $this->hasOne(DispositivoMovil::class, 'device_id', 'id_dispositivo');
	}
}
