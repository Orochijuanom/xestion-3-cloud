<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T11;
use App\T11Detalle;
use App\T11Grafico;

class t11Controller extends Controller
{
    public function form11(Request $request){        

        $this->validate($request, [
        'responsable_calculo_seguimiento' => 'required',
        
        ]);
        
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
            'tipo_indicador' => $request['tipo_indicador'],
            'metodo_calculo' => $request['metodo_calculo'],
            'frecuencia_medicion_reporte' => $request['frecuencia_medicion_reporte'],
            'fuente_datos_calculo' => $request['fuente_datos_calculo'],
            'interpretacion' => $request['interpretacion'],
            'responsable_calculo_seguimiento' => $request['responsable_calculo_seguimiento'],            
            't11_id' => $t11->id
        ]);        
        
            for ($j=0; $j < 4; $j++) {
                if(isset($request['meta'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j])){
                    $meta = $request['meta'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $meta = "";
                } 
                
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
                    'meta' => $meta,
                    'valor1' => $valor1,
                    'valor2' => $valor2,
                    'analisis' => $analisis,
                    'acciones_mejora' => $acciones_mejora,

                ]);
            }
        
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }

    public function edit(Request $request)
    {
         $t11 = T11::find($request['id']);

         $t11->codigo = $request['codigo'];
         $t11->version = $request['version'];
         $t11->fecha = $request['fecha'];         
         $t11->save();    
        
                 
        $t11detalle = T11Detalle::find($request['t11detalle']);

        $t11detalle->fecha_creacion_indicador = $request['fecha_creacion_indicador'];
        $t11detalle->ficha_numero = $request['ficha_numero'];
        $t11detalle->nombre_indicador = $request['nombre_indicador'];
        $t11detalle->definicion_indicador = $request['definicion_indicador'];
        $t11detalle->tipo_indicador = $request['tipo_indicador'];
        $t11detalle->metodo_calculo = $request['metodo_calculo'];
        $t11detalle->fuente_datos_calculo = $request['fuente_datos_calculo'];
        $t11detalle->interpretacion = $request['interpretacion'];
        $t11detalle->responsable_calculo_seguimiento = $request['responsable_calculo_seguimiento'];            
        $t11detalle->save();   

        

        for ($j=0; $j < 4; $j++) {
                if(isset($request['meta'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j])){
                    $meta = $request['meta'][$T11Detalle->metodo_calculo][$T11Detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $meta = "";
                } 

                if(isset($request['valor1'][$t11detalle->metodo_calculo][$t11detalle->frecuencia_medicion_reporte][$j])){
                    $valor1 = $request['valor1'][$t11detalle->metodo_calculo][$t11detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $valor1 = "";
                } 

                if(isset($request['valor2'][$t11detalle->metodo_calculo][$t11detalle->frecuencia_medicion_reporte][$j])){
                    $valor2 = $request['valor2'][$t11detalle->metodo_calculo][$t11detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $valor2 = "";
                }

                if(isset($request['analisis'][$t11detalle->metodo_calculo][$t11detalle->frecuencia_medicion_reporte][$j])){
                    $analisis = $request['analisis'][$t11detalle->metodo_calculo][$t11detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $analisis = "";
                }

                if(isset($request['acciones_mejora'][$t11detalle->metodo_calculo][$t11detalle->frecuencia_medicion_reporte][$j])){
                    $acciones_mejora = $request['acciones_mejora'][$t11detalle->metodo_calculo][$t11detalle->frecuencia_medicion_reporte][$j];
                }else{
                    $acciones_mejora = "";
                }

                $t11grafico = T11Grafico::find($request['t11grafico']);  
                $t11grafico->meta = $meta;              
                $t11grafico->valor1 = $valor1;
                $t11grafico->valor2 = $valor2;
                $t11grafico->analisis = $analisis;
                $t11grafico->acciones_mejora = $acciones_mejora;
                $t11grafico->save();
            }
                                

        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');
    }
}
