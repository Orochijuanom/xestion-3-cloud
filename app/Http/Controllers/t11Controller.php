<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T11;
use App\T11Detalle;

class t11Controller extends Controller
{
    public function form11(Request $request){

        $this->validate($request, [
            'fecha_creacion_indicador' => 'required', 
            'ficha_numero' => 'required',
            'nombre_indicador' => 'required',
            'definicion_indicador' => 'required',
            'meta' => 'required',
            'tipo_indicador' => 'required',
            'metodo_calculo' => 'required',
            'fuente_datos_calculo' => 'required',
            'interpretacion' => 'required',
            'responsable_calculo_seguimiento' => 'required',
            'empresa_id' => 'required'
        ]);

        $t11 = T11::create([
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id'],
            
        ]);
                 
        T11Detalle::create([
            'fecha_creacion_indicador' => $request['fecha_creacion_indicador'],
            'ficha_numero' => $request['ficha_numero'],
            'nombre_indicador' => $request['nombre_indicador'],
            'definicion_indicador' => $request['definicion_indicador'],
            'meta' => $request['meta'],
            'tipo_indicador' => $request['tipo_indicador'],
            'metodo_calculo' => $request['metodo_calculo'],
            'fuente_datos_calculo' => $request['fuente_datos_calculo'],
            'interpretacion' => $request['interpretacion'],
            'responsable_calculo_seguimiento' => $request['responsable_calculo_seguimiento'],            
            't11_id' => $t11->id
        ]);        

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }
}
