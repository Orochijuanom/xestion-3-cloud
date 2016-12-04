<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T7Detalle extends Model
{
    protected $table = 't7_detalle';
    protected $fillable = ['comite','sede_proyecto','fecha_reunion_comite','abiertos','cerrados','fecha_prox_reunion','evidencia_reunion','t7_id'];
}
