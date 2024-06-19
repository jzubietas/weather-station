<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsoFavorito extends Model
{
    use HasFactory;
    protected $table = 'osofavoritos';
    //protected $guarded = ['id'];
}
