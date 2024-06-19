<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveTv extends Model
{
    use HasFactory;
    protected $table = 'live_tv';
    protected $guarded = ['cve'];
}
