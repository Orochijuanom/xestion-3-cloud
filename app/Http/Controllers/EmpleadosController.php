<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;

class EmpleadosController extends Controller
{
    public function crearempleado(Request $request)
    {   
        
       /** $this->validate($request, [
            'nombre_apellidos' => 'required',
            'cedula' => 'required', 
            'fecha_nacimiento' => 'required',
            'fecha_ingreso_empresa' => 'required',
            'sexo' => 'required',
            'edad' => 'required',
            'estado_civil' => 'required',
            'n_hijos' => 'required',
            'direccion_vivienda' => 'required',
            'ciudad'=> 'required',
            'cargo'=> 'required',
            'experiencia'=> 'required',
            'profesion'=> 'required',
            'email'=> 'required',
            'jefe_inmediato'=> 'required',
            'area_pertenece'=> 'required',
            'lugar_centro_trabajo'=> 'required',
            'horario_trabajo'=> 'required',
            'eps'=> 'required',
            'arl'=> 'required',
            'afp'=> 'required',
            'caja_compensacion'=> 'required',
            'grupo_sanguineo'=> 'required',
            'persona_contacto'=> 'required',
            'tel_contacto'=> 'required',
            'dir_contacto'=> 'required',
            'sueldo'=> 'required',
            'n_cuenta'=> 'required',
            'banco'=> 'required',
            'talla_pantalon'=> 'required',
            'talla_overol'=> 'required',
            'talla_calzado'=> 'required',
            'talla_camisa'=> 'required',
            'talla_guante'=> 'required',
            'talla_impermeable'=> 'required',
            'fecha_induccion'=> 'required',
            'fecha_reinducion'=> 'required',
            'fecha_ultimo_examen_ocupacional'=> 'required',
            'fecha_proximo_examen_ocupacional'=> 'required',
            'apto_medicamente'=> 'required',
            'concepto_trabaja_alturas'=> 'required',
            'concepto_trabaja_espacio_confinado'=> 'required',
            'registro_entrega_dotacion'=> 'required',
            'n_licencia_conduccion'=> 'required',
            'tetano'=> 'required',
            'fiebre_amarilla'=> 'required',
            'hepatitis'=> 'required',
            'antirrabica'=> 'required',
            'otra'=> 'required',
            'sst'=> 'required',
            'ambiente'=> 'required',
            'tecnicas'=> 'required',
            'calidad'=> 'required',
            'empresa_id'=> 'required'
        ]);
        **/
        $data = $request->all();        
        $evaluacion = Empleados::create($data);
        return redirect()->back()->with('flash_message', 'Se ha creado la evaluación exitosamente');
    }
}
