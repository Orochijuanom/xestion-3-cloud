<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T4Clasificacion extends Model
{
    protected $table = 't4_clasificacion';
    protected $fillable = ['descripcion_efecto_id', 't4_detalle_id'];

    public function descripcionEfecto(){
        return $this->belongsTo('App\DescripcionEfecto', 'descripcion_efecto_id');

    }
}
