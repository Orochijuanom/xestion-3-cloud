<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T11Grafico extends Model
{
    protected $table = 't11_grafico';
    protected $fillable = ['t11_detalle_id', 'valor1', 'valor2', 'analisis', 'acciones_mejora'];
     
}
