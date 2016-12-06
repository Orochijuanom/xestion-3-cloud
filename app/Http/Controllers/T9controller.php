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
}
