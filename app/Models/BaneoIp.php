<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaneoIp extends Model
{
    use HasFactory;
    protected $table = 'baneos_ip';
    //protected $guarded = ['id'];
}
