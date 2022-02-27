<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Numeracao extends Model
{
    protected $table = 'numeracao';

    protected $fillable = [
        'numero','status','created_at','updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
