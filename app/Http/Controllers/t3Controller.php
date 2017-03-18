<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T1;
use App\T3;
use App\T3Detalle;

class t3Controller extends Controller
{
    public function form3(Request $request)
    {
        $this->validate($request, [
            'fecha_actualizacion' => 'required',
            'motivo_actualizacion' => 'required',
            'responsable_actualizacion' => 'required',
            'revisado_por' => 'required',
            'empresa_id' => 'required',
            'codigo' => 'required',
            'version' => 'required',            
            'fecha' => 'required'
        ]); 

        //Creamos el registro de la actualizacion
        $t3 = T3::create([
            'fecha_actualizacion' =>  $request["fecha_actualizacion"],
            'motivo_actualizacion' => $request['motivo_actualizacion'],
            'responsable_actualizacion' => $request['responsable_actualizacion'],
            'revisado_por' => $request['revisado_por'],
            'evaluacion_cumplimiento_primer_semestre' => $request['evaluacion_cumplimiento_primer_semestre'],
            'evaluacion_cumplimiento_segundo_semestre' => $request['evaluacion_cumplimiento_segundo_semestre'],                    
            'empresa_id' => $request['empresa_id'],
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha']
        ]);

        //Registramos el detalle de la actualizacion        
        $datosdetalle = count($request['norma']);
        for ($i=0; $i < $datosdetalle; $i++){                                
            T3Detalle::create([
                'norma' =>  $request["norma"][$i],
                'numero_norma' =>  $request["numero_norma"][$i],
                'fecha_publicacion' => $request['fecha_publicacion'][$i],
                'emisor' => $request['emisor'][$i],
                'articulo' => $request['articulo'][$i],
                'descripcion_obligacion' => $request['descripcion_obligacion'][$i],
                'palabra_clave' => $request['palabra_clave'][$i],
                'aplica' => $request['aplica'][$i],
                'cumple' => $request['cumple'][$i],
                'como_cumple' => $request['como_cumple'][$i],
                'responsable_cumplimiento' => $request['responsable_cumplimiento'][$i],                                                            
                't3_id' => $t3->id
            ]);
                                                  
        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
        
    }


    public function edit(Request $request)
    {
        $t3 = T3::find($request['id']);//buscamos el id

        $t3->fecha_actualizacion =  $request["fecha_actualizacion"];
        $t3->motivo_actualizacion = $request['motivo_actualizacion'];
        $t3->responsable_actualizacion = $request['responsable_actualizacion'];
        $t3->revisado_por = $request['revisado_por'];
        $t3->evaluacion_cumplimiento_primer_semestre = $request['evaluacion_cumplimiento_primer_semestre'];
        $t3->evaluacion_cumplimiento_segundo_semestre = $request['evaluacion_cumplimiento_segundo_semestre'];                            
        $t3->codigo = $request['codigo'];
        $t3->version = $request['version'];
        $t3->fecha = $request['fecha'];
        $t3->save();

        $datosdetalle = count($request['norma']);
        for ($i=0; $i < $datosdetalle; $i++){
            $t3Detalle = T3Detalle::find($request['t3Detalle'][$i]); // buscamos el id                                 
            
            $t3Detalle->norma =  $request["norma"][$i];
            $t3Detalle->numero_norma =  $request["numero_norma"][$i];
            $t3Detalle->fecha_publicacion = $request['fecha_publicacion'][$i];
            $t3Detalle->emisor = $request['emisor'][$i];
            $t3Detalle->articulo  = $request['articulo'][$i];
            $t3Detalle->descripcion_obligacion = $request['descripcion_obligacion'][$i];
            $t3Detalle->palabra_clave = $request['palabra_clave'][$i];
            $t3Detalle->aplica = $request['aplica'][$i];
            $t3Detalle->cumple = $request['cumple'][$i];
            $t3Detalle->como_cumple = $request['como_cumple'][$i];
            $t3Detalle->responsable_cumplimiento = $request['responsable_cumplimiento'][$i];                                                            
                
            $t3Detalle->save();
                                                  
        }
        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');
    }
}
