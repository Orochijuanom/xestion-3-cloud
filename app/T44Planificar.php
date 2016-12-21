<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T44Planificar extends Model
{
    protected $table = 't44_planificar';
    protected $fillable = ['actividad', 'ene_p', 'ene_e', 'feb_p', 'feb_e', 'mar_p', 'mar_e', 'abr_p', 'abr_e', 'may_p', 'may_e', 'jun_p', 'jun_e', 'jul_p', 'jul_e', 'ago_p', 'ago_e', 'sep_p', 'sep_e', 'oct_p', 'oct_e', 'nov_p', 'nov_e', 'dic_p', 'dic_e', 'evidencias', 'responsable_plan_id', 't44_id'];

    public function responsable(){
        return $this->belongsTo('App\Empleados', 'responsable_plan_id');
    }
}
