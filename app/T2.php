<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T2 extends Model
{
    protected $table = 't2';
    protected $fillable =['codigo', 'version', 'fecha', 'presupuesto_anio', 'fecha_asignacion_presupuesto', 'responsable_planificacion_presupuesto', 'fecha_revision_presupuesto_primer_semestre', 'responsable_revision_presupuesto_primer_semestre', 'analisis_revision_primer_semestre', 'fecha_revision_presupuesto_segundo_semestre', 'responsable_revision_presupuesto_segundo_semestre', 'analisis_revision_segundo_semestre', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }

    public function t2Detalles(){
        return $this->hasMany('App\T2Detalle');
    }

    public function t2Notas(){
        return $this->hasMany('App\T2Nota');
    }

    public function responsable_planificacion(){
        return $this->belongsTo('App\Empleados', 'responsable_planificacion_presupuesto');

    }

    public function responsable_revision_presupuesto_primer_s(){
        return $this->belongsTo('App\Empleados', 'responsable_revision_presupuesto_primer_semestre');

    }

    public function responsable_revision_presupuesto_segundo_s(){
         return $this->belongsTo('App\Empleados', 'responsable_revision_presupuesto_segundo_semestre');

    }

}
