<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

    protected $fillable = ['logo','nombre_empresa'];

    public function t1()
    {
        return $this->hasMany('App\T1');
    }

    public function t2()
    {
        return $this->hasMany('App\T2');
    }

    public function t3()
    {
        return $this->hasMany('App\T3');
    }

    public function T4()
    {
        return $this->hasMany('App\T4');
    }

    public function T5()
    {
        return $this->hasMany('App\T5');
    }

    public function T6()
    {
        return $this->hasMany('App\T6');
    }

    public function T7()
    {
        return $this->hasMany('App\T7');
    }

    public function T8()
    {
        return $this->hasMany('App\T8');
    }

    public function T9()
    {
        return $this->hasMany('App\T9');
    }

    public function T10()
    {
        return $this->hasMany('App\T10');
    }

    public function Empleados()
    {
        return $this->hasMany('App\Empleados');
    }
}
