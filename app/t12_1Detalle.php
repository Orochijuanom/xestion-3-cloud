<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t12_1Detalle extends Model
{
    protected $table = 't12_1_detalle';
    protected $fillable = ['apellidos_nombres', 'p', 'e', 'puntaje_obtenido', 'puntaje_posible', 't12_1_id'];

    public function empleado(){
        return $this->belongsTo('App\Empleados', 'apellidos_nombres');

    }
}
