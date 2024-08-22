<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simplan extends Model
{
    use HasFactory;
    protected $table = 'simplan';
    protected $fillable = [
        'name',
        'duration',
        'price',
        'status'
    ];
}
