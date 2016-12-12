<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T9;
use App\T9Detalle;

class T9controller extends Controller
{
    public function form9(Request $request){
       
        $t9 = T9::create([
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id'],

        ]);
        
        for ($i=0; $i <= 10; $i++) { 
            
            T9Detalle::create([
                'musculo_esquletico' => $request['musculo_esquletico'][$i],
                'dermatologico' => $request['dermatologico'][$i],
                'respiratorio' => $request['respiratorio'][$i],
                'cardio_vascular' => $request['cardio_vascular'][$i],
                'trabajo_en_alturas' => $request['trabajo_en_alturas'][$i],
                'test_de_fobias' => $request['test_de_fobias'][$i],
                'otro' => $request['otro'][$i],
                'espirometria' => $request['espirometria'][$i],
                'audiometria' => $request['audiometria'][$i],
                'optometria' => $request['optometria'][$i],
                'visiometria' => $request['visiometria'][$i],
                'electrocardiograma' => $request['electrocardiograma'][$i],
                'examen_coordinacion_motriz' => $request['examen_coordinacion_motriz'][$i],
                'examen_de_psicologia' => $request['examen_de_psicologia'][$i],
                'otro1' => $request['otro1'][$i],
                'cuadro_hematico' => $request['cuadro_hematico'][$i],
                'glicemia_pre_y_pos' => $request['glicemia_pre_y_pos'][$i],
                'perfil_lipidico' => $request['perfil_lipidico'][$i],
                'parcial_de_orina' => $request['parcial_de_orina'][$i],
                'otro2' => $request['otro2'][$i],
                'tetanos_td' => $request['tetanos_td'][$i],
                'fiebre_amarilla' => $request['fiebre_amarilla'][$i],
                'hepatitis_b' => $request['hepatitis_b'][$i],
                'antirrabica' => $request['antirrabica'][$i],
                'otra3' => $request['otra3'][$i],
                'cargo_id' => $request['cargo_id'][$i],
                't9_id' => $t9->id                
            ]);
        }

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }

    public function edit(Request $request)
    {
        $t9 = T9::find($request['id']);

        $t9->codigo = $request['codigo'];
        $t9->version = $request['version'];
        $t9->fecha = $request['fecha'];
            
        
        for ($i=0; $i <= 10; $i++) { 
            
            $t9detalle = T9Detalle::find($request['t9detalle'][$i]);

            $t9detalle->musculo_esquletico = $request['musculo_esquletico'][$i];
            $t9detalle->dermatologico = $request['dermatologico'][$i];
            $t9detalle->respiratorio = $request['respiratorio'][$i];
            $t9detalle->cardio_vascular = $request['cardio_vascular'][$i];
            $t9detalle->trabajo_en_alturas = $request['trabajo_en_alturas'][$i];
            $t9detalle->test_de_fobias = $request['test_de_fobias'][$i];
            $t9detalle->otro = $request['otro'][$i];
            $t9detalle->espirometria = $request['espirometria'][$i];
            $t9detalle->audiometria = $request['audiometria'][$i];
            $t9detalle->optometria = $request['optometria'][$i];
            $t9detalle->visiometria = $request['visiometria'][$i];
            $t9detalle->electrocardiograma = $request['electrocardiograma'][$i];
            $t9detalle->examen_coordinacion_motriz = $request['examen_coordinacion_motriz'][$i];
            $t9detalle->examen_de_psicologia = $request['examen_de_psicologia'][$i];
            $t9detalle->otro1 = $request['otro1'][$i];
            $t9detalle->cuadro_hematico = $request['cuadro_hematico'][$i];
            $t9detalle->glicemia_pre_y_pos = $request['glicemia_pre_y_pos'][$i];
            $t9detalle->perfil_lipidico = $request['perfil_lipidico'][$i];
            $t9detalle->parcial_de_orina = $request['parcial_de_orina'][$i];
            $t9detalle->otro2 = $request['otro2'][$i];
            $t9detalle->tetanos_td = $request['tetanos_td'][$i];
            $t9detalle->fiebre_amarilla = $request['fiebre_amarilla'][$i];
            $t9detalle->hepatitis_b = $request['hepatitis_b'][$i];
            $t9detalle->antirrabica = $request['antirrabica'][$i];
            $t9detalle->otra3 = $request['otra3'][$i];
            $t9detalle->cargo_id = $request['cargo_id'][$i];
            $t9detalle->save();    
        }

        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');
    }
}
