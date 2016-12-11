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
                'empleado_id' => $request['empleado_id'][$i],
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

    public function edit(Request $request)
    {
        $t5 = T5::find($request['id']);

        $t5->codigo = $request['codigo'];            
        $t5->version = $request['version'];
        $t5->fecha = $request['fecha'];
        $t5->save();
        

        for ($i=0; $i < 9; $i++){
            $t5detalle = T5Detalle::find($request['t5detalle_id'][$i]);                                 
            
            $t5detalle->empleado_id = $request['empleado_id'][$i];
            $t5detalle->elemento_casco =  $request["elemento_casco"][$i];            
            $t5detalle->casco_ciclista = $request['casco_ciclista'][$i]; 
            $t5detalle->casco_motociclista = $request['casco_motociclista'][$i];                  
            $t5detalle->casco_tipo2 = $request['casco_tipo2'][$i];
            $t5detalle->chavito = $request['chavito'][$i];
            $t5detalle->gafas_claras = $request['gafas_claras'][$i];
            $t5detalle->gafas_oscuras = $request['gafas_oscuras'][$i];
            $t5detalle->tapaoidos_de_insercion = $request['tapaoidos_de_insercion'][$i];
            $t5detalle->tapaoidos_copa = $request['tapaoidos_copa'][$i];
            $t5detalle->camisa = $request['camisa'][$i];
            $t5detalle->pantalon = $request['pantalon'][$i];
            $t5detalle->peto_de_caucho = $request['peto_de_caucho'][$i];
            $t5detalle->peto_de_carnaza = $request['peto_de_carnaza'][$i];
            $t5detalle->chaleco_reflectivo = $request['chaleco_reflectivo'][$i];
            $t5detalle->kit_motociclista = $request['kit_motociclista'][$i];
            $t5detalle->bota_de_seguridad = $request['bota_de_seguridad'][$i];
            $t5detalle->bota_de_caucho = $request['bota_de_caucho'][$i];
            $t5detalle->zapato_antideslizante = $request['zapato_antideslizante'][$i];
            $t5detalle->mascarilla_desechable = $request['mascarilla_desechable'][$i];
            $t5detalle->guantes_de_latex = $request['guantes_de_latex'][$i];
            $t5detalle->guantes_de_nitrillo = $request['guantes_de_nitrillo'][$i];
            $t5detalle->guantes_carnaza = $request['guantes_carnaza'][$i];
            $t5detalle->guantes_neopreno = $request['guantes_neopreno'][$i];
            $t5detalle->guantes_vaquetas = $request['guantes_vaquetas'][$i];
            $t5detalle->impermeable = $request['impermeable'][$i];
            $t5detalle->arnes_seguridad = $request['arnes_seguridad'][$i];
            $t5detalle->eslinga = $request['eslinga'][$i];
            $t5detalle->otros_elementos = $request['otros_elementos'][$i];
            $t5detalle->save();    
                                     
        }
        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');
    }
}
