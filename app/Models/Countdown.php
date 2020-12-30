<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    protected $table = 'countdown';

    protected $fillable = [
        'countdown_timer','disable',
    ];
}
