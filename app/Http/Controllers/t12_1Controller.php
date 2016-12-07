<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T12_1;
use App\T12_1Detalle;

class t12_1Controller extends Controller
{
    public function form12_1(Request $request){
        $t12_1 = T12_1::create([
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            't12_id' => $request['t12_id'],
            'empresa_id' => $request['empresa_id']
        
        ]);

        $datos = count($request['apellidos_nombres']);

        for ($i=0; $i < $datos; $i++) {
            t12_1Detalle::create([
                'apellidos_nombres' => $request['apellidos_nombres'][$i],
                'p' => $request['p'][$i],
                'e' => $request['e'][$i],
                'puntaje_obtenido' => $request['puntaje_obtenido'][$i],
                'puntaje_posible' => $request['puntaje_posible'][$i],
                't12_1_id' => $t12_1->id,

            ]);

        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }
}
