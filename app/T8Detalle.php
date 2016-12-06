<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T8Detalle extends Model
{
    protected $table = 't8_detalle';
    protected $fillable = ['apellidos_nombres', 'centro_trabajo', 'tipo_examen', 'fecha_examen', 'musculo_esqueletico', 'dermatologico', 'respiratorio', 'cardiovascular', 'trabajo_alturas', 'test_fobias_trabajo_alturas', 'otro', 'espirometria', 'audiometria', 'optometria', 'visiometria', 'electrocardiograma', 'examen_coordinacion_motriz', 'examen_psicologia', 'otro_complementario', 'cuadro_hematico', 'glicemia_pre_pos', 'perfil_lipido', 'parcial_orina', 'otro_laboratorio', 'tetanos', 'fiebre_amarilla', 'hepatitis_b', 'antirrabica', 'otro_vacuna', 'pve_requerido', 'recomendaciones', 'restricciones', 'remision_eps', 'fecha_compromiso_asistencia_eps', 'asistencia_eps', 't8_id'];

    public function empleado(){
        return $this->belongsTo('App\Empleados', 'apellidos_nombres');

    }
}
