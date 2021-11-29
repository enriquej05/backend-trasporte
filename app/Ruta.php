<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $fillable = [
        'lugar_nombre', 'coordenada_a', 'coordenada_b',
    ];
}
