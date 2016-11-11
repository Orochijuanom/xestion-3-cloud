<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T1Detalle extends Model
{    
    protected $table = 't1_detalle';
    protected $fillable = ['politica_sistema_gestion','area', 'objetivo', 'version', 'nombre_indicador', 'unidad_medida','frecuencia_analisis','metodo_calculo','meta','ficha_indicador','responsable','t1_id'];
}
