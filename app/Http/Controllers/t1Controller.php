<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\T1;
use App\T1Detalle;
class t1Controller extends Controller
{

    public function create_empresa(Request $request)
    {
        $this->validate($request, [
            'nombre_empresa' => 'required',            
        ]);
        
        $file = $request->file('file');
        
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
 
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('public')->put($nombre,  \File::get($file));
        

        $empresa = Empresa::create([
            'nombre_empresa' => $request['nombre_empresa'],            
            'logo' => $nombre
        ]);
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }


    public function form1(Request $request)
    {
        //Registramos el form1 equivalente a la versión y código
        
        $t1 = T1::create([
            'codigo' => $request['codigo'],            
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id']
        ]);


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
                'ficha_indicador' => $request['numero_indicador'][$i],
                'responsable' => $request['responsable'][$i],
                't1_id' => $t1->id
            ]);                            
        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }
}
