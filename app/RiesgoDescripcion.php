<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiesgoDescripcion extends Model
{
    protected $table = 'riesgo_descripcion';

    public function riesgo(){
        return $this->belongsTo('App\Riesgo', 'riesgo_id');

    }
}
