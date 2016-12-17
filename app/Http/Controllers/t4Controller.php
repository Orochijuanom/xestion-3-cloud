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
}
