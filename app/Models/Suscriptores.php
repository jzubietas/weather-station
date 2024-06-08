<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Traits\CommonModel;

class Suscriptores extends Model
{
    use HasFactory;
    //use CommonModel;

    //protected $guarded = ['id'];
    protected $table = 'usuario_vod';
    protected $guarded = ['id'];
}
