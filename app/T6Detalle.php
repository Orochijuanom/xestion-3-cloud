<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T6Detalle extends Model
{
    protected $table = 't6_detalle';
    protected $fillable = ['fecha_t6', 'nombre_quien_reporta', 'area_proyecto', 'descripcion_solicitud', 'fuente_accion', 'tipo', 'prioridad_intervencion', 'acciones_desarrolladas', 'ap', 'ac', 'om', 'ua', 'c', 'responsable_cierre', 'fecha_compromiso_cierre', 'fecha_cierre', 'oportuno', 'eficaz', 'evidencia', 't6_id'];

    public function nombre_reporta(){
        return $this->belongsTo('App\Empleados', 'nombre_quien_reporta');

    }

    public function responsable(){
        return $this->belongsTo('App\Empleados', 'responsable_cierre');

    }
}
