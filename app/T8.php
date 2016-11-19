<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T8 extends Model
{
    protected $table = 't8';
    protected $fillable = ['codigo', 'version', 'fecha', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');

    }

    public function t8Detalles(){
        return $this->hasMany('App\T8Detalle');

    }
}
