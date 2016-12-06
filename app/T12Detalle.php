<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T12Detalle extends Model
{
    protected $table = 't12_detalle';
    protected $fillable = ['capacitacion', 'objetivo', 'temas_capacitacion', 'responsable', 't12_id'];

    public function t12Cargos(){
        return $this->hasMany('App\T12Cargo', 't12detalle_id');

    }
}
