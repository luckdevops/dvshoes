<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnderecoUsuario extends Model
{
    protected $table = 'enderecos_usuarios';

    protected $fillable = [
        'cep','logradouro','bairro','complemento','endereco_entrega','id_usuario','latitude','longitude',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function categoria()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_usuario');
    }
}
