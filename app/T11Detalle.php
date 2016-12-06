<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T11Detalle extends Model
{
    protected $table = 't11_detalle';
    protected $fillable = ['fecha_creacion_indicador','ficha_numero','nombre_indicador','definicion_indicador','meta',
                          'tipo_indicador','metodo_calculo','fuente_datos_calculo','interpretacion','responsable_calculo_seguimiento',
                          't11_id'];


    public function T11Detalle(){
        return $this->belongsTo('App\T11Detalle');

    }

    //TODO: por probar
    public function Detalle(){
        return $this->hasOne('App\T11Detalle');
    }
}
