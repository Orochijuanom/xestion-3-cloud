<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\T6;
use App\T6Detalle;

class t6controller extends Controller
{
    public function form6(Request $request){
       
        $t6 = T6::create([
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id'],

        ]);
        
        $datos = count($request['fecha_t6']);

        for ($i=0; $i < $datos; $i++) { 
            T6Detalle::create([
                'fecha_t6' => $request['fecha_t6'][$i],
                'nombre_quien_reporta' => $request['nombre_quien_reporta'][$i],
                'area_proyecto' => $request['area_proyecto'][$i],
                'descripcion_solicitud' => $request['descripcion_solicitud'][$i],
                'fuente_accion' => $request['fuente_accion'][$i],
                'tipo' => $request['tipo'][$i],
                'prioridad_intervencion' => $request['prioridad_intervencion'][$i],
                'acciones_desarrolladas' => $request['acciones_desarrolladas'][$i],
                'ap' => $request['ap'][$i],
                'ac' => $request['ac'][$i],
                'om' => $request['om'][$i],
                '1a' => $request['1a'][$i],
                'c' => $request['c'][$i],
                'responsable_cierre' => $request['responsable_cierre'][$i],
                'fecha_compromiso_cierre' => $request['fecha_compromiso_cierre'][$i],
                'fecha_cierre' => $request['fecha_cierre'][$i],
                'oportuno' => $request['oportuno'][$i],
                'eficaz' => $request['eficaz'][$i],
                'evidencia' => $request['evidencia'][$i],
                't6_id' => $t6->id
            ]);
        }

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }
}
