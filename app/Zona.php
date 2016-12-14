<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = 'zonas';

    public function epps(){
        return $this->hasMany('App\Epp', 'zona_id');

    }
}
