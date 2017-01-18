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
            for ($i=0; $i < 5; $i++){

                if (@$request->file('evidencia_reunion')[$i]){
                    $file = $request->file('evidencia_reunion')[$i];
                    //obtenemos el nombre del archivo
                    $nombre = $file->getClientOriginalName();            
                    //indicamos que queremos guardar un nuevo archivo en el disco local
                    \Storage::disk('public')->put($nombre,  \File::get($file));
                }else{
                    $nombre = "";
                }

                T7Detalle::create([
                    'comite' =>  $request["comite"][$i],
                    'sede_proyecto' => $request['sede_proyecto'][$i],
                    'fecha_reunion_comite' => $request['fecha_reunion_comite'][$i],
                    'abiertos' => $request['abiertos'][$i],
                    'cerrados' => $request['cerrados'][$i],
                    'fecha_prox_reunion' => $request['fecha_prox_reunion'][$i],
                    'evidencia_reunion' => $nombre,
                    't7_id' => $t7->id
                ]);
                
            }                          
        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
        
    }

    public function edit(Request $request)
    {
        //Creamos la empresa
        $t7 = T7::find($request['id']);           
        $t7->codigo = $request['codigo'];
        $t7->version = $request['version'];
        $t7->fecha = $request['fecha'];
        $t7->save();
        
        
        //Registramos el detalle de la actualizacion        
        
        for ($i=0; $i < 5; $i++){                                
            $t7detalle = T7Detalle::find($request['t7detalle'][$i]);
            $t7detalle->comite =  $request['comite'][$i];
            $t7detalle->sede_proyecto = $request['sede_proyecto'][$i];
            $t7detalle->fecha_reunion_comite = $request['fecha_reunion_comite'][$i];
            $t7detalle->abiertos = $request['abiertos'][$i];
            $t7detalle->cerrados = $request['cerrados'][$i];
            $t7detalle->fecha_prox_reunion = $request['fecha_prox_reunion'][$i];
            //$t7detalle->evidencia_reunion = $request['evidencia_reunion'][$i];
            $t7detalle->save();                                   
        }
        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');                          
    }         
}
