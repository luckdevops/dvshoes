<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    protected $table = 'cor';

    protected $fillable = [
        'nome','hexadecimal','status','created_at','updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
