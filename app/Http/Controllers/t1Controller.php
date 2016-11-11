<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T1;
use App\T1Detalle;
class t1Controller extends Controller
{
    public function form1(Request $request)
    {
        $this->validate($request, [
            'nombre_empresa' => 'required',            
            'codigo' => 'required',
            'version' => 'required',
            'fecha' => 'required'
        ]);

        $empresa = T1::create([
            'nombre_empresa' => $request['nombre_empresa'],
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'logo' => 'default'
        ]);
        if ($empresa){
            for ($i=0; $i < 9; $i++){                                
                T1Detalle::create([
                    'politica_sistema_gestion' =>  $request["politica_sistema_gestion"][$i],            
                    'area' => $request['area'][$i], 
                    'objetivo' => $request['objetivo'][$i],                  
                    'nombre_indicador' => $request['nombre_indicador'][$i], 
                    'unidad_medida' => $request['unidad_medida'][$i],
                    'frecuencia_analisis' => $request['frecuencia_analisis'][$i],
                    'metodo_calculo' => $request['metodo_calculo'][$i],
                    'meta' => $request['meta'][$i],
                    'ficha_indicador' => $request['ficha_indicador'][$i],
                    'responsable' => $request['responsable'][$i],
                    't1_id' => $empresa->id
                ]);
                
            }                          
        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
        
    }
}
