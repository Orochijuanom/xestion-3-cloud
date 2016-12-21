<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T44PlanAccion extends Model
{
    protected $table = 't44_plan_accion';
    protected $fillable = ['hallazgos_programa', 'gestion_propuesta', 'fecha_compromiso_ejecucion', 'fecha_ejecucion', 'cierre_oportuno', 'evidencia', 'responsable_accion_id'];

    public function responsable(){
        return $this->belongsTo('App\Empleados', 'responsable_accion_id');
    }
}
