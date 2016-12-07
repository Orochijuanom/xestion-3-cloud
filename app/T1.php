<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T1 extends Model
{
    protected $table = 't1';
    protected $fillable = ['codigo','version', 'fecha','empresa_id'];

     public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
    public function T1Detalles()
    {
        return $this->hasMany('App\T1Detalle');
    }                                                 
}
