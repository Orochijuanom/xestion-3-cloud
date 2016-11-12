<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class t3Controller extends Controller
{
    public function form1(Request $request)
    {
        $this->validate($request, [
            'nombre_empresa' => 'required',            
            'codigo' => 'required',
            'version' => 'required',
            'fecha' => 'required'
        ]);
        //Creamos la empresa
        $empresa = T1::create([
            'nombre_empresa' => $request['nombre_empresa'],
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'logo' => 'default'
        ]);

        //Creamos el registro de la actualizacion
        $t3 = T3::create([
            'fecha_actualizacion' =>  $request["fecha_actualizacion"],
            'motivo_actualizacion' => $request['motivo_actualizacion'],
            'responsable_actualizacion' => $request['responsable_actualizacion'],
            'revisado_por' => $request['revisado_por'],                    
            't1_id' => $empresa->id
        ]);

        //Registramos el detalle de la actualizacion        
        if ($empresa){
            for ($i=0; $i < 9; $i++){                                
                T3Detalle::create([
                    'norma' =>  $request["norma"][$i],
                    'fecha_publicacion' => $request['fecha_publicacion'][$i],
                    'emisor' => $request['emisor'][$i],
                    'articulo' => $request['articulo'][$i],                    
                    't3_id' => $t3->id
                ]);
                
            }                          
        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
        
    }
}
