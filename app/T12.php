<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T12 extends Model
{
    protected $table = 't12';
    protected $fillable = ['codigo', 'version', 'fecha', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');

    }
    
    public function t12Detalles(){
        return $this->hasMany('App\T12Detalle');

    }
}
