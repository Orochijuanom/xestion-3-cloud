<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T4Epp extends Model
{
    protected $table = 't4_epps';
    protected $fillable = ['epps_id', 't4_detalle_id'];

    public function epp(){
        return $this->belongsTo('App\Epp', 'epps_id');
    }
}
