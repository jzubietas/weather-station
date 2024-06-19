<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatCalidad extends Model
{
    use HasFactory;
    protected $table = 'cat_calidad';
    protected $guarded = ['cve'];
}
