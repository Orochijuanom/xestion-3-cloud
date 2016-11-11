<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T1 extends Model
{
    protected $table = 't1';

    protected $fillable = ['logo','nombre_empresa', 'codigo', 'version', 'fecha'];

    public function detalles()
    {
        return $this->hasMany('App\T1Detalle');
    }
}
