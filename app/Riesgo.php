<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    protected $table = 'riesgo';
    protected $fillable = ['riesgo'];

    public function descripciones(){
        return $this->hasMany('App\RiesgoDescripcion', 'riesgo_id');

    }
}
