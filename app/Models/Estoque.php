<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';

    protected $fillable = [
        'id_calcado','quantidade','status','created_at','updated_at',
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
