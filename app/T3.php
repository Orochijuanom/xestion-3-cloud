<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T3 extends Model
{
    protected $table = 't3';

    protected $fillable = ['fecha_actualizacion','motivo_actualizacion', 'responsable_actualizacion', 'revisado_por','empresa_id','codigo','version','fecha'];

    public function detalles()
    {
        return $this->hasMany('App\T3Detalle');
    }    
}
