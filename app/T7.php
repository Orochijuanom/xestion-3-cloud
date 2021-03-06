<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T7 extends Model
{
    protected $table = 't7';
    protected $fillable = ['codigo','version', 'fecha','empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }

    public function T7Detalles()
    {
        return $this->hasMany('App\T7Detalle');
    }
    
}
