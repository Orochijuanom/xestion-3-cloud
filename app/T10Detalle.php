<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T10Detalle extends Model
{
    protected $table = 't10_detalle';
    protected $fillable = ['proceso', 'tipo_documento', 'codigo_documento', 'nombre_documento', 'origen_interno', 'origen_externo', 'version', 'fecha_version', 'aprobado_por', 'medio_almacenamiento', 'acceso', 'proteccion', 'sitio_consulta_documento', 'sitio_consulta_registro_fisico', 'sitio_consulta_registro_digital', 'tiempo_retencion', 'disposicion_final', 'motivo_cambio_version_documento', 't10_id'];

    public function aprobado(){
        return $this->belongsTo('App\Empleados', 'aprobado_por');

    }
}
