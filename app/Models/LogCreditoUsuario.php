<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogCreditoUsuario extends Model
{
    use HasFactory;
    protected $table = 'log_creditos_usuario';
    protected $guarded = ['cve'];
}
