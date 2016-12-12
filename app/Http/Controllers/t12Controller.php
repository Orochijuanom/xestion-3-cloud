<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T12;
use App\T12Detalle;
use App\T12Cargo;

class t12Controller extends Controller
{
    public function form12(Request $request){
        $t12 = T12::create([
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id'],
        ]);

        $datosDetalle = count($request['capacitacion']);

        for ($i=0; $i < $datosDetalle; $i++) {

            $t12Detalle = T12Detalle::create([
                'capacitacion' => $request['capacitacion'][$i],
                'objetivo' => $request['objetivo'][$i],
                'temas_capacitacion' => $request['temas_capacitacion'][$i],
                'responsable' => $request['responsable'][$i],
                't12_id' => $t12->id,
                
            ]);
            
            $datosCargo = count($request['cargo'][$i]);

            for ($j=0; $j < $datosCargo; $j++) { 
                $t12Cargo = T12Cargo::create([
                    'cargo_id' => $request['cargo'][$i][$j],
                    't12detalle_id' => $t12Detalle->id

                ]);
            }
        }

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente'); 

    }

    public function edit(Request $request)
    {
        $t12 = T12::find($request['id']);
        $t12->codigo = $request['codigo'];
        $t12->version = $request['version'];
        $t12->fecha = $request['fecha'];
        $t12->save();
        

        $datosDetalle = count($request['capacitacion']);

        for ($i=0; $i < $datosDetalle; $i++) {

            $t12Detalle = T12Detalle::find($request['t12detalle'][$i]);

            $t12Detalle->capacitacion = $request['capacitacion'][$i];
            $t12Detalle->objetivo = $request['objetivo'][$i];
            $t12Detalle->temas_capacitacion = $request['temas_capacitacion'][$i];
            $t12Detalle->responsable = $request['responsable'][$i];                                            
            
            $datosCargo = count($request['cargo'][$i]);

            for ($j=0; $j < $datosCargo; $j++) { 
                $t12Cargo = T12Cargo::create([
                    'cargo_id' => $request['cargo'][$i][$j],
                    't12detalle_id' => $t12Detalle->id

                ]);
            }
        }

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }
}
