<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T12Cargo extends Model
{
    protected $table = 't12_cargo';
    protected $fillable = ['cargo_id', 't12detalle_id'];

    public function cargo(){
        return $this->belongsTo('App\Cargo');

    }
}
