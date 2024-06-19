<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatPlataforma extends Model
{
    use HasFactory;
    protected $table = 'cat_plataforma';
    protected $guarded = ['cve'];
}
