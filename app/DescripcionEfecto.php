<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescripcionEfecto extends Model
{
    protected $table = 'descripcion_efecto';
    protected $fillable = ['descripcion_id', 'efecto_id'];

    public function descripcion(){
        return $this->belongTo('App\RiesgoDescripcion', 'riesgo_id');
        
    }

    public function efecto(){
        return $this->belongsTo('App\Efecto', 'efecto_id');

    }
}
