<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkingCode extends Model
{
    use HasFactory;
    protected $table = 'linking_code';
    protected $guarded = ['id'];
}
