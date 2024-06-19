<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogHistorial extends Model
{
    use HasFactory;
    protected $table = 'log_historial';
    protected $guarded = ['cve'];
}
