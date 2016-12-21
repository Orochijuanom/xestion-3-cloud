<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T44 extends Model
{
    protected $table = 't44';
    protected $fillable = ['codigo', 'fecha', 'version', 'objetivos_programa',  'alcance_programa', 'politicas_id', 'objetivos_est_id', 'responsable_id', 'recurso_id', 'empresa_id'];

    public function politica(){
        return $this->belongsTo('App\T1Detalle', 'politicas_id');
    }

    public function objetivo(){
        return $this->belongsTo('App\T1Detalle', 'objetivos_est_id');
    }

    public function responsable(){
        return $this->belongsTo('App\Empleados', 'responsable_id');
    }

    public function recurso(){
        return $this->belongsTo('App\T2', 'recurso_id');
    }

    public function empresa(){
        return $this->belongsTo('App\Empresa', 'empresa_id');
    }

    public function metas(){
        return $this->hasMany('App\T44Meta', 't44_id');
    }

    public function planificaciones(){
        return $this->hasMany('App\T44Planificar', 't44_id');
    }

    public function graficos(){
        return $this->hasMany('App\T44Grafico1', 't44_id');
    }

    public function acciones(){
        return $this->hasMany('App\T44PlanAccion', 't44_id');
    }
}
