<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T9 extends Model
{
    protected $table = 't9';
    protected $fillable = ['codigo', 'version', 'fecha', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');

    }

    public function detalles(){
        return $this->hasMany('App\T9Detalle');

    }
}
