<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCliente extends Model
{
    use HasFactory;
    protected $table = 't_clientes';
    protected $guarded = ['cve'];
}
