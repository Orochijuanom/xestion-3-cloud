<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T44Grafico1 extends Model
{
    protected $table = 't44_grafico_1';
    protected $fillable = ['numero_grafico', 'nombre_grafico', 'objetivo', 'descripcion', 'metodo_calculo', 'frecuencia_medicion_reporte', 'analisis', 'valor1', 'valor2', 'valor3', 'meta', 't44_id'];
}
