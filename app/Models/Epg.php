<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epg extends Model
{
    use HasFactory;
    protected $table = 'epg';
    protected $guarded = ['id'];
}
