<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['nombre_apellidos','cedula', 'fecha_nacimiento','fecha_ingreso_empresa',
    'sexo','edad','estado_civil','n_hijos','direccion_vivienda','ciudad','cargo','experiencia','profesion',
    'email','jefe_inmediato','area_pertenece','lugar_centro_trabajo','horario_trabajo','eps','arl','afp','caja_compensacion','grupo_sanguineo',
    'persona_contacto','tel_contacto','dir_contacto','sueldo','n_cuenta','banco','talla_pantalon',
    'talla_overol','talla_calzado','talla_camisa','talla_guante','talla_impermeable','fecha_induccion',
    'fecha_reinducion','fecha_ultimo_examen_ocupacional','fecha_proximo_examen_ocupacional','apto_medicamente',
    'concepto_trabaja_alturas','concepto_trabaja_espacio_confinado','registro_entrega_dotacion','n_licencia_conduccion',
    'tetano','fiebre_amarilla','hepatitis','antirrabica','otra','sst','ambiente','tecnicas','calidad','empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');

    }
    
    public function cargos(){
        return $this->belongsTo('App\Cargo', 'cargo');

    }

    
}
