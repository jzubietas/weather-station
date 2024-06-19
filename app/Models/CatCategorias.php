<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatCategorias extends Model
{
    use HasFactory;
    protected $table = 'cat_categorias';
    protected $guarded = ['cve'];
}
