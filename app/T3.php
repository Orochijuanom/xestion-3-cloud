<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T3 extends Model
{
    protected $table = 't3';

    protected $fillable = ['fecha_actualizacion','motivo_actualizacion', 'responsable_actualizacion', 'revisado_por', 'evaluacion_cumplimiento_primer_semestre', 'evaluacion_cumplimiento_segundo_semestre', 'empresa_id','codigo','version','fecha'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
    public function detalles()
    {
        return $this->hasMany('App\T3Detalle');
    }

    public function responsable(){
        return $this->belongsTo('App\Empleados', 'responsable_actualizacion');

    }

    public function revisado(){
        return $this->belongsTo('App\Empleados', 'revisado_por');
    }


}
