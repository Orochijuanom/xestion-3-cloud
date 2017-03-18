<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T4Charla extends Model
{
    protected $table = 't4_charlas';
    protected $fillable = ['charlas_id', 't4_detalle_id'];

    public function charla(){
        return $this->belongsTo('App\Charla', 'charlas_id');
    }

    public function T4Detalle(){
        return $this->belongsTo('App\T4Detalle', 't4_detalle_id');
    }
}
