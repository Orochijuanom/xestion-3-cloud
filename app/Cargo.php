<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';
    protected $fillable = ['cargo', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');

    }

    public function empleados(){
        return $this->hasMany('App\Empleados', 'cargo');

    }

    public function cargo_planificacions(){
        return $this->hasMany('App\T2', 'cargo_planificacion');

    }


}
