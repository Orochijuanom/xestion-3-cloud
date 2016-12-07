<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T5 extends Model
{
    protected $table = 't5';
    protected $fillable = ['codigo','version', 'fecha','empresa_id'];
    
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }

    public function T5Detalles()
    {
        return $this->hasMany('App\T5Detalle');
    }
}
