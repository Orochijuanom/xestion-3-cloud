<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T4 extends Model
{
    protected $table = 't4';
    protected $fillable = ['codigo', 'fecha', 'version', 'area', 'procesos', 'cargo_id', 'fecha_elaboracion', 'responsable_elaboracion', 'fecha_actualizacion', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa', 'empresa_id');

    }

    public function empleado(){
        return $this->belongsTo('App\Empleados', 'responsable_elaboracion');
    }

    public function cargo(){
        return $this->belongsTo('App\Cargo', 'cargo_id');
    }

    public function t4Detalles(){
        return $this->hasMany('App\T4Detalle');

    }
}
