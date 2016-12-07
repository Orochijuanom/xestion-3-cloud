<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T5Detalle extends Model
{
    protected $table = 't5_detalle';
    protected $fillable = ['elemento_casco','casco_ciclista', 'casco_motociclista',
                            'casco_tipo2','chavito','gafas_claras','gafas_oscuras',
                            'tapaoidos_de_insercion','tapaoidos_copa','camisa','peto_de_caucho',
                            'peto_de_carnaza','chaleco_reflectivo','kit_motociclista','bota_de_seguridad',
                            'bota_de_caucho','zapato_antideslizante','mascarilla_desechable','guantes_de_latex',
                            'guantes_de_nitrillo','guantes_carnaza','guantes_neopreno','guantes_vaquetas',
                            'impermeable','arnes_seguridad','eslinga','otros_elementos','pantalon','t5_id','empleado_id'];
 
}
