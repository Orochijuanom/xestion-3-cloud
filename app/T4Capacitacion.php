<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T4Capacitacion extends Model
{
    protected $table = 't4_capacitaciones';
    protected $fillable = ['capacitaciones_id', 't4_detalle_id'];

    public function capacitacion(){
        return $this->belongsTo('App\Capacitacion', 'capacitaciones_id');
    }

    public function T4Detalle(){
        return $this->belongsTo('App\T4Detalle', 't4_detalle_id');
    }
}
