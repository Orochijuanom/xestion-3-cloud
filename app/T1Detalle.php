<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T1Detalle extends Model
{    
    protected $table = 't1_detalle';
    protected $fillable = ['politica_sistema_gestion','area', 'objetivo', 'version', 'nombre_indicador', 'unidad_medida','frecuencia_analisis','metodo_calculo','meta','numero_indicador','responsable','t1_id'];

    public function numero_indicador(){
        return $this->belongsTo('App\T11', 'numero_indicador');

    }
}
