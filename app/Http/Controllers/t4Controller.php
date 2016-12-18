<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\T4;
use App\T4Detalle;
use App\T4Clasificacion;
use App\T4Charla;
use App\T4Capacitacion;
use App\T4Epp;

class t4Controller extends Controller
{
    public function form4(Request $request){
        $t4 = T4::create([
           'codigo' => $request['codigo'],
           'fecha' => $request['fecha'],
           'version' => $request['version'],
           'area' => $request['area'],
           'procesos' => $request['procesos'],
           'cargo_id' => $request['cargos_id'],
           'fecha_elaboracion' => $request['fecha_elaboracion'],
           'responsable_elaboracion' => $request['responsable_elaboracion'],
           'fecha_actualizacion' => $request['fecha_actualizacion'],
           'empresa_id' => $request['empresa_id']

        ]);

        $datosDetalle = count($request['proceso']);

        for ($i=0; $i < $datosDetalle; $i++) { 
        
            $t4detalle = T4Detalle::create([
                'proceso' => $request['proceso'][$i],
                'zona' => $request['zona'][$i],
                'cargo_id' => $request['cargo_id'][$i],
                'actividad' => $request['actividad'][$i],
                'tarea' => $request['tarea'][$i],
                'rutinario' => $request['rutinario'][$i],
                'actividad_propia_contratada' => $request['actividad_propia_contratada'][$i],
                'fuente' => $request['fuente'][$i],
                'medio' => $request['medio'][$i],
                'nivel_deficiencia' => $request['nivel_deficiencia'][$i],
                'nivel_exposicion' => $request['nivel_exposicion'][$i],
                'nivel_consecuencia' => $request['nivel_consecuencia'][$i],
                'aceptabilidad_riesgo' => $request['aceptabilidad_riesgo'][$i],
                'numero_expuestos' => $request['numero_expuestos'][$i],
                'riesgo_residual' => $request['riesgo_residual'][$i],
                'existencia_requisito_legal' => $request['existencia_requisito_legal'][$i],
                'eliminacion' => $request['eliminacion'][$i],
                'sustitucion' => $request['sustitucion'][$i],
                'control_ingenieria' => $request['control_ingenieria'][$i],
                'senalizacion' => $request['senalizacion'][$i],
                'equipos' => $request['equipos'][$i],
                'controles_adicionales' => $request['controles_adicionales'][$i],
                't4_id' => $t4->id,
            ]);

            if(isset($request['clasificacion'][$i])){
                $datosClasificacion = count($request['clasificacion'][$i]);

                for ($j=0; $j < $datosClasificacion ; $j++) { 
                    T4Clasificacion::create([
                        'descripcion_efecto_id' => $request['clasificacion'][$i][$j],
                        't4_detalle_id' => $t4detalle->id
                        
                        ]);
                }
            }

            if(isset($request['charla'][$i])){
                $datosCharla = count($request['charla'][$i]);

                for ($j=0; $j < $datosCharla ; $j++) { 
                    T4Charla::create([
                        'charlas_id' => $request['charla'][$i][$j],
                        't4_detalle_id' => $t4detalle->id
                        
                        ]);
                }
            }

            if(isset($request['capacitacion'][$i])){
                $datosCapacitacion = count($request['capacitacion'][$i]);

                for ($j=0; $j < $datosCapacitacion ; $j++) { 
                    T4Capacitacion::create([
                        'capacitaciones_id' => $request['capacitacion'][$i][$j],
                        't4_detalle_id' => $t4detalle->id
                        
                        ]);
                }
            }

            if(isset($request['epps'][$i])){
                $datosEpps = count($request['epps'][$i]);

                for ($j=0; $j < $datosEpps ; $j++) { 
                    T4Epp::create([
                        'epps_id' => $request['epps'][$i][$j],
                        't4_detalle_id' => $t4detalle->id
                        
                        ]);
                }
            }


        
        }
         return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }



    public function edit(Request $request)
    {
        $t4 = T4::find($request['id']);

        $t4->codigo = $request['codigo'];
        $t4->fecha = $request['fecha'];
        $t4->version = $request['version'];
        $t4->area = $request['area'];
        $t4->procesos = $request['procesos'];
        $t4->cargo_id = $request['cargos_id'];
        $t4->fecha_elaboracion = $request['fecha_elaboracion'];
        $t4->responsable_elaboracion = $request['responsable_elaboracion'];
        $t4->fecha_actualizacion = $request['fecha_actualizacion'];
        $t4->save();

        $datosDetalle = count($request['proceso']);

        for ($i=0; $i < $datosDetalle; $i++) { 
        
            $t4detalle = T4Detalle::find($request['t4detalle'][$i]);

            $t4detalle->proceso = $request['proceso'][$i];
            $t4detalle->zona = $request['zona'][$i];
            $t4detalle->cargo_id = $request['cargo_id'][$i];
            $t4detalle->actividad = $request['actividad'][$i];
            $t4detalle->tarea = $request['tarea'][$i];
            $t4detalle->rutinario = $request['rutinario'][$i];
            $t4detalle->actividad_propia_contratada = $request['actividad_propia_contratada'][$i];
            $t4detalle->fuente = $request['fuente'][$i];
            $t4detalle->medio = $request['medio'][$i];
            $t4detalle->nivel_deficiencia = $request['nivel_deficiencia'][$i];
            $t4detalle->nivel_exposicion = $request['nivel_exposicion'][$i];
            $t4detalle->nivel_consecuencia = $request['nivel_consecuencia'][$i];
            $t4detalle->aceptabilidad_riesgo = $request['aceptabilidad_riesgo'][$i];
            $t4detalle->numero_expuestos = $request['numero_expuestos'][$i];
            $t4detalle->riesgo_residual = $request['riesgo_residual'][$i];
            $t4detalle->existencia_requisito_legal = $request['existencia_requisito_legal'][$i];
            $t4detalle->eliminacion = $request['eliminacion'][$i];
            $t4detalle->sustitucion = $request['sustitucion'][$i];
            $t4detalle->control_ingenieria = $request['control_ingenieria'][$i];
            $t4detalle->senalizacion = $request['senalizacion'][$i];
            $t4detalle->equipos = $request['equipos'][$i];
            $t4detalle->controles_adicionales = $request['controles_adicionales'][$i];
            $t4detalle->save();


            if(isset($request['clasificacion'][$i])){
                $datosClasificacion = count($request['clasificacion'][$i]);

                for ($j=0; $j < $datosClasificacion ; $j++) { 
                    $t4clasificacion = T4Clasificacion::find($request['clasificacion'][$i][$j]);
                    $t4clasificacion->descripcion_efecto_id = $request['clasificacion'][$i][$j];
                        
                }
            }

            if(isset($request['charla'][$i])){
                $datosCharla = count($request['charla'][$i]);

                for ($j=0; $j < $datosCharla ; $j++) { 
                    $t4charla = T4Charla::find($request['charla'][$i][$j]);
                    $t4charla->charlas_id = $request['charla'][$i][$j];                
                }
            }

            if(isset($request['capacitacion'][$i])){
                $datosCapacitacion = count($request['capacitacion'][$i]);

                for ($j=0; $j < $datosCapacitacion ; $j++) { 
                    $t4capacitacion = T4Capacitacion::find($request['capacitacion'][$i][$j]);
                    $t4capacitacion->capacitaciones_id = $request['capacitacion'][$i][$j];                    
                }
            }

            if(isset($request['epps'][$i])){
                $datosEpps = count($request['epps'][$i]);

                for ($j=0; $j < $datosEpps ; $j++) { 
                    $t4eps = T4Epp::find($request['epps'][$i][$j]);
                    $t4eps->epps_id = $request['epps'][$i][$j];                                                                        
                }
            }


        
        }
         return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');
    }
}
