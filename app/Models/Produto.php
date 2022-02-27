<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';

    protected $fillable = [
        'nome','descricao','status','created_at','updated_at',
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
