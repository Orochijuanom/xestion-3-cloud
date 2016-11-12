<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T7 extends Model
{
    protected $table = 't7';

    protected $fillable = ['comite','sede_proyecto','fecha_reunion_comite','abiertos','cerrados','fecha_prox_reunion','evidencia_reunion','t1_id'];
}
