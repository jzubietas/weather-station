<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogFavorito extends Model
{
    use HasFactory;
    protected $table = 'log_favorites';
    protected $guarded = ['cve'];
}
