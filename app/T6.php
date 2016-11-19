<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T6 extends Model
{
    protected $table = 't6';
    protected $fillable = ['codigo','version', 'fecha','empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
    public function t6Detalles()
    {
        return $this->hasMany('App\T6Detalle');
    } 
}
