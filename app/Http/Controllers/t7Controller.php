<?php

namespace App\Http\Controllers;
use App\T1;
use App\T7;

use Illuminate\Http\Request;

class t7Controller extends Controller
{
    public function form7(Request $request)
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
        
        //Registramos el detalle de la actualizacion        
        if ($empresa){
            for ($i=0; $i < 9; $i++){                                
                T7::create([
                    'comite' =>  $request["comite"][$i],
                    'sede_proyecto' => $request['sede_proyecto'][$i],
                    'fecha_reunion_comite' => $request['fecha_reunion_comite'][$i],
                    'abiertos' => $request['abiertos'][$i],
                    'cerrados' => $request['cerrados'][$i],
                    'fecha_prox_reunion' => $request['fecha_prox_reunion'][$i],
                    'evidencia_reunion' => $request['evidencia_reunion'][$i],
                    't1_id' => $empresa->id
                ]);
                
            }                          
        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
        
    }
}
