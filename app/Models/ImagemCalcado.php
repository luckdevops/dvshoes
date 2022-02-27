<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagemCalcado extends Model
{
    protected $table = 'imagem_calcado';

    protected $fillable = [
        'id_calcado','image_path','principal','status','created_at','updated_at',
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
