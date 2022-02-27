<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    protected $table = 'tipo_produto';

    protected $fillable = [
        'nome','status','created_at','updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
