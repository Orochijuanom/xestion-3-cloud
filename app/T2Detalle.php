<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T2Detalle extends Model
{
    protected $table = 't2_detalle';
    protected $fillable = ['actividad', 'presupuesto', 'ejecucion_primer_semestre', 'ejecucion_segundo_semestre', 't2_id'];
}
