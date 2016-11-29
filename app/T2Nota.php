<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T2Nota extends Model
{
        protected $table = 't2_nota';
        protected $fillable = ['fecha_nota', 'cargo', 'motivo', 't2_id'];
}
