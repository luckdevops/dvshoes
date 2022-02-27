<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioAdministrador extends Model
{
    protected $table = 'usuario_administrador';

    protected $fillable = [
        'nome','login','email','senha','created_at','updated_at',
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
