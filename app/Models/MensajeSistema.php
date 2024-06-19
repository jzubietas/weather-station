<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensajeSistema extends Model
{
    use HasFactory;
    protected $table = 'mensajes_sistema';
    protected $guarded = ['cve'];
}
