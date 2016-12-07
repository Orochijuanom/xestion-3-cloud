<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t12_1 extends Model
{
    protected $table = 't12_1';
    protected $fillable = ['codigo', 'version', 'fecha', 't12_id', 'empresa_id'];

    public function t12(){
        return $this->belongsTo('App\T12', 't12_id');

    }

    public function empresa(){
        return $this->belongsTo('App\Empresa');

    }

    public function t12_1Detalles(){
        return $this->hasMany('App\T12_1Detalle', 't12_1_id');

    }
}
