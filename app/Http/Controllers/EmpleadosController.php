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

    public function edit(Request $request)
    {
        $empleado = Empleados::find($request['id']);

        $empleado->nombre_apellidos = $request['nombre_apellidos'];
        $empleado->cedula = $request['cedula'];
        $empleado->fecha_nacimiento = $request['fecha_nacimiento'];
        $empleado->fecha_ingreso_empresa = $request['fecha_ingreso_empresa'];
        $empleado->sexo = $request['sexo'];
        $empleado->edad = $request['edad'];
        $empleado->estado_civil = $request['estado_civil'];
        $empleado->n_hijos = $request['n_hijos'];
        $empleado->direccion_vivienda = $empleado['direccion_vivienda'];
        $empleado->ciudad = $request['ciudad'];
        $empleado->cargo = $request['cargo'];
        $empleado->experiencia = $request['experiencia'];
        $empleado->profesion = $request['profesion'];
        $empleado->email = $request['email'];   
        $empleado->jefe_inmediato = $request['jefe_inmediato'];
        $empleado->area_pertenece = $request['area_pertenece'];            
        $empleado->lugar_centro_trabajo = $request['lugar_centro_trabajo'];
        $empleado->horario_trabajo = $request['horario_trabajo'];
        $empleado->eps = $request['eps'];
        $empleado->arl = $request['arl'];
        $empleado->afp = $request['afp'];
        $empleado->caja_compensacion = $request['caja_compensacion'];
        $empleado->grupo_sanguineo = $request['grupo_sanguineo'];
        $empleado->persona_contacto = $request['persona_contacto'];
        $empleado->tel_contacto = $request['tel_contacto'];
        $empleado->dir_contacto = $request['dir_contacto'];
        $empleado->sueldo = $request['sueldo'];
        $empleado->n_cuenta = $request['n_cuenta'];
        $empleado->banco = $request['banco'];
        $empleado->talla_pantalon = $request['talla_pantalon'];
        $empleado->talla_overol = $request['talla_overol'];
        $empleado->talla_calzado = $request['talla_calzado'];
        $empleado->talla_camisa = $request['talla_camisa'];
        $empleado->talla_guante = $request['talla_guante'];
        $empleado->talla_impermeable = $request['talla_impermeable'];
        $empleado->fecha_induccion = $request['fecha_induccion'];
        $empleado->fecha_reinducion = $request['fecha_reinducion'];
        $empleado->fecha_ultimo_examen_ocupacional = $request['fecha_ultimo_examen_ocupacional'];
        $empleado->fecha_proximo_examen_ocupacional = $request['fecha_proximo_examen_ocupacional'];
        $empleado->apto_medicamente = $request['apto_medicamente'];
        $empleado->concepto_trabaja_alturas = $request['concepto_trabaja_alturas'];
        $empleado->concepto_trabaja_espacio_confinado = $request['concepto_trabaja_espacio_confinado'];
        $empleado->registro_entrega_dotacion = $request['registro_entrega_dotacion'];
        $empleado->n_licencia_conduccion = $request['n_licencia_conduccion'];
        $empleado->tetano = $request['tetano'];
        $empleado->fiebre_amarilla = $request['fiebre_amarilla'];
        $empleado->hepatitis = $request['hepatitis'];
        $empleado->antirrabica = $request['antirrabica'];
        $empleado->otra = $request['otra'];
        $empleado->sst = $request['sst'];
        $empleado->ambiente = $request['ambiente'];
        $empleado->tecnicas = $request['tecnicas'];
        $empleado->calidad = $request['calidad'];
        $empleado->empresa_id = $request['empresa_id'];
        $empleado->save();
        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');   
    }
}
