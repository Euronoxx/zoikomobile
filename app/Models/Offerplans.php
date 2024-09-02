<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offerplans extends Model
{
    protected $table = 'offerplans';
    protected $fillable = [
        'plan',
        '24mprice',
        '12mprice',
        '30dprice',
        'data',
        'callt,e',
        'sms',
        'status'
    ];
}
