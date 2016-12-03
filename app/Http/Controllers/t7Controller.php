<?php

namespace App\Http\Controllers;
use App\T1;
use App\T7;
use App\T7Detalle;

use Illuminate\Http\Request;

class t7Controller extends Controller
{
    public function form7(Request $request)
    {
        $this->validate($request, [                        
            'codigo' => 'required',
            'version' => 'required',
            'fecha' => 'required',
            'comite' => 'required',
            'sede_proyecto' => 'required',
            'fecha_reunion_comite' => 'required',
            'abiertos' => 'required',
            'cerrados' => 'required',
            'fecha_prox_reunion' => 'required',
            'evidencia_reunion' => 'required',
            'empresa_id' => 'required'
        ]);
        //Creamos la empresa
        $t7 = T7::create([            
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id'],
        ]);
        
        //Registramos el detalle de la actualizacion        
        if ($t7){
            for ($i=0; $i < 9; $i++){                                
                T7Detalle::create([
                    'comite' =>  $request["comite"][$i],
                    'sede_proyecto' => $request['sede_proyecto'][$i],
                    'fecha_reunion_comite' => $request['fecha_reunion_comite'][$i],
                    'abiertos' => $request['abiertos'][$i],
                    'cerrados' => $request['cerrados'][$i],
                    'fecha_prox_reunion' => $request['fecha_prox_reunion'][$i],
                    'evidencia_reunion' => $request['evidencia_reunion'][$i],
                    't7_id' => $t7->id
                ]);
                
            }                          
        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
        
    }
}
