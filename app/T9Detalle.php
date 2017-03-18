<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T9Detalle extends Model
{
    protected $table = 't9_detalle';
    protected $fillable = ['musculo_esquletico','dermatologico','respiratorio','cardio_vascular','trabajo_en_alturas','test_de_fobias',
    'otro','espirometria','audiometria','optometria','visiometria','electrocardiograma','examen_coordinacion_motriz','examen_de_psicologia',
    'otro1','cuadro_hematico','glicemia_pre_y_pos','perfil_lipidico','parcial_de_orina','otro2','tetanos_td','fiebre_amarilla','hepatitis_b',
    'antirrabica','otra3','cargo_id','t9_id'];
    
    public function cargo(){
        return $this->belongsTo('App\Cargo');
    }
}
