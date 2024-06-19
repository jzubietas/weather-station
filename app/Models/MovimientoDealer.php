<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoDealer extends Model
{
    use HasFactory;
    protected $table = 'movimientos_dealer';
    protected $guarded = ['cve'];
}
