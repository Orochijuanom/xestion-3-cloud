<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiesgoDescripcion extends Model
{
    protected $table = 'riesgo_descripcion';
    protected $fillable = ['descripcion', 'riesgo_id'];

    public function efectos(){
        return $this->hasMany('App\DescripcionEfecto', 'descripcion_id');
    }
}
