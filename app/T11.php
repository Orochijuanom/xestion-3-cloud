<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T11 extends Model
{
    protected $table = 't11';
    protected $fillable = ['codigo', 'version', 'fecha', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');

    }

    public function detalles(){
        return $this->hasMany('App\T11Detalle');

    }
}
