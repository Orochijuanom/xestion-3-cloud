<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T11;
use App\T11Detalle;
use App\T11Grafico;

class t11Controller extends Controller
{
    public function form11(Request $request){
        
        /** $this->validate($request, [
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
        ]);**/

        $t11 = T11::create([
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id'],
            
        ]);
                 
        $T11Detalle = T11Detalle::create([
            'fecha_creacion_indicador' => $request['fecha_creacion_indicador'],
            'ficha_numero' => $request['ficha_numero'],
            'nombre_indicador' => $request['nombre_indicador'],
            'definicion_indicador' => $request['definicion_indicador'],
            'meta' => $request['meta'],
            'tipo_indicador' => $request['tipo_indicador'],
            'metodo_calculo' => $request['metodo_calculo'],
            'frecuencia_medicion_reporte' => $request['frecuencia_medicion_reporte'],
            'fuente_datos_calculo' => $request['fuente_datos_calculo'],
            'interpretacion' => $request['interpretacion'],
            'responsable_calculo_seguimiento' => $request['responsable_calculo_seguimiento'],            
            't11_id' => $t11->id
        ]);        
        
            for ($j=0; $j < 4; $j++) {
                if(isset($request['valor1'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j])){
                    $valor1 = $request['valor1'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $valor1 = "";
                } 

                if(isset($request['valor2'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j])){
                    $valor2 = $request['valor2'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $valor2 = "";
                }

                if(isset($request['analisis'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j])){
                    $analisis = $request['analisis'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $analisis = "";
                }

                if(isset($request['acciones_mejora'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j])){
                    $acciones_mejora = $request['acciones_mejora'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $acciones_mejora = "";
                }


                T11Grafico::create([
                    't11_detalle_id' => $T11Detalle->id,
                    'valor1' => $valor1,
                    'valor2' => $valor2,
                    'analisis' => $analisis,
                    'acciones_mejora' => $acciones_mejora,

                ]);
            }
        
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }
}
