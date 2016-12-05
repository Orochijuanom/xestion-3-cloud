<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T3Detalle extends Model
{
    protected $table = 't3_detalle';

    protected $fillable = ['norma', 'numero_norma','fecha_publicacion', 'emisor', 'articulo', 'descripcion_obligacion','palabra_clave','aplica','cumple','como_cumple','responsable_cumplimiento','t3_id'];
    
    public function responsable(){
        return $this->belongsTo('App\Empleados', 'responsable_cumplimiento');

    }
}
