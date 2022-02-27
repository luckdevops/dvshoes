<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calcado extends Model
{
    protected $table = 'calcado';

    protected $fillable = [
        'codigo','id_produto','id_tipo_produto','id_cor','id_numeracao','preco'
        ,'quantidade','estoque','status','created_at','updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
