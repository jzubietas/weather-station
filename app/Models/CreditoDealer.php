<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditoDealer extends Model
{
    use HasFactory;
    protected $table = 'creditos_dealer';
    protected $guarded = ['cve'];
    public $timestamps = FALSE;
}
