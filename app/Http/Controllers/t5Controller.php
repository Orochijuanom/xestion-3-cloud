<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T5;
use App\T5Detalle;
class t5Controller extends Controller
{
    public function form5(Request $request)
    {
        //Registramos el form1 equivalente a la versión y código
        
        $t5 = T5::create([
            'codigo' => $request['codigo'],            
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id']
        ]);


        for ($i=0; $i < 9; $i++){                                
            T5Detalle::create([
                'elemento_casco' =>  $request["elemento_casco"][$i],            
                'casco_ciclista' => $request['casco_ciclista'][$i], 
                'casco_motociclista' => $request['casco_motociclista'][$i],                  
                'casco_tipo2' => $request['casco_tipo2'][$i],
                'chavito' => $request['chavito'][$i],
                'gafas_claras' => $request['gafas_claras'][$i],
                'gafas_oscuras' => $request['gafas_oscuras'][$i],
                'tapaoidos_de_insercion' => $request['tapaoidos_de_insercion'][$i],
                'tapaoidos_copa' => $request['tapaoidos_copa'][$i],
                'camisa' => $request['camisa'][$i],
                'pantalon' => $request['pantalon'][$i],
                'peto_de_caucho' => $request['peto_de_caucho'][$i],
                'peto_de_carnaza' => $request['peto_de_carnaza'][$i],
                'chaleco_reflectivo' => $request['chaleco_reflectivo'][$i],
                'kit_motociclista' => $request['kit_motociclista'][$i],
                'bota_de_seguridad' => $request['bota_de_seguridad'][$i],
                'bota_de_caucho' => $request['bota_de_caucho'][$i],
                'zapato_antideslizante' => $request['zapato_antideslizante'][$i],
                'mascarilla_desechable' => $request['mascarilla_desechable'][$i],
                'guantes_de_latex' => $request['guantes_de_latex'][$i],
                'guantes_de_nitrillo' => $request['guantes_de_nitrillo'][$i],
                'guantes_carnaza' => $request['guantes_carnaza'][$i],
                'guantes_neopreno' => $request['guantes_neopreno'][$i],
                'guantes_vaquetas' => $request['guantes_vaquetas'][$i],
                'impermeable' => $request['impermeable'][$i],
                'arnes_seguridad' => $request['arnes_seguridad'][$i],
                'eslinga' => $request['eslinga'][$i],
                'otros_elementos' => $request['otros_elementos'][$i],
                't5_id' => $t5->id
            ]);                            
        }
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }
}
