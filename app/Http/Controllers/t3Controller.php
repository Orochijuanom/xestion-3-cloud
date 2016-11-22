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
            'empresa_id' => $request['empresa_id'],
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha']
        ]);

        //Registramos el detalle de la actualizacion        
        
        for ($i=0; $i < 9; $i++){                                
            T3Detalle::create([
                'norma' =>  $request["norma"][$i],
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
}
