<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T4Detalle extends Model
{
    protected $table = 't4_detalle';
    protected $fillable = ['proceso', 'zona', 'cargo_id', 'actividad', 'tarea', 'rutinario', 'actividad_propia_contratada', 'consecuencia_efectos_posibles', 'fuente', 'medio', 'nivel_deficiencia', 'nivel_exposicion', 'nivel_consecuencia', 'aceptabilidad_riesgo', 'numero_expesto', 'riesgo_residual', 'existencia_requisito_legal', 'eliminacion', 'sustitucion', 'control_ingenieria', 'senalizacion', 'equipos', 'controles_adicionales', 't4_id'];

    public function t4Clasificaciones(){
        return $this->hasMany('App\T4Clasificacion', 't4_detalle_id');

    }

    public function t4Capacitaciones(){
        return $this->hasMany('App\T4Capacitacion', 't4_detalle_id');
 
    }

    public function t4Charlas(){
        return $this->hasMany('App\T4Charla', 't4_detalle_id');
 
    }

    public function t4Epps(){
        return $this->hasMany('App\T4Epp', 't4_detalle_id');

    }
}
