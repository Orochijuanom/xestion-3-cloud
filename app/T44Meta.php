<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T44Meta extends Model
{
    protected $table = 't44_meta';
    protected $fillable = ['meta', 'valor', 't44_id'];
    
}
