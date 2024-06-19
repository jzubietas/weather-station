<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogSugerencia extends Model
{
    use HasFactory;
    protected $table = 'log_sugerencia';
    protected $guarded = ['cve'];
}
