<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T10 extends Model
{
    protected $table = 't10';
    protected $fillable = ['codigo', 'version', 'fecha', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');

    }

    public function t10Detalles(){
        return $this->hasMany('App\T10Detalle');

    }
}
