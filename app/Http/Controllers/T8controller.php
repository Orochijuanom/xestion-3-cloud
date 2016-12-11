<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\T8;
use App\T8Detalle;

class T8controller extends Controller
{
    public function form8(Request $request){
       
        $t8 = T8::create([
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id'],

        ]);
        
        $datos = count($request['apellidos_nombres']);

        for ($i=0; $i < $datos; $i++) { 
            $T8Detalle = T8Detalle::create([
                'apellidos_nombres' => $request['apellidos_nombres'][$i],
                'centro_trabajo' => $request['centro_trabajo'][$i],
                'tipo_examen' => $request['tipo_examen'][$i],
                'fecha_examen' => $request['fecha_examen'][$i],
                'musculo_esqueletico' => $request['musculo_esqueletico'][$i],
                'dermatologico' => $request['dermatologico'][$i],
                'respiratorio' => $request['respiratorio'][$i],
                'cardiovascular' => $request['cardiovascular'][$i],
                'trabajo_alturas' => $request['trabajo_alturas'][$i],
                'test_fobias_trabajo_alturas' => $request['test_fobias_trabajo_alturas'][$i],
                'otro' => $request['otro'][$i],
                'espirometria' => $request['espirometria'][$i],
                'audiometria' => $request['audiometria'][$i],
                'optometria' => $request['optometria'][$i],
                'visiometria' => $request['visiometria'][$i],
                'electrocardiograma' => $request['electrocardiograma'][$i],
                'examen_coordinacion_motriz' => $request['examen_coordinacion_motriz'][$i],
                'examen_psicologia' => $request['examen_psicologia'][$i],
                'otro_complementario' => $request['otro_complementario'][$i],
                'cuadro_hematico' => $request['cuadro_hematico'][$i],
                'glicemia_pre_pos' => $request['glicemia_pre_pos'][$i],
                'perfil_lipido' => $request['perfil_lipido'][$i],
                'parcial_orina' => $request['parcial_orina'][$i],
                'otro_laboratorio' => $request['otro_laboratorio'][$i],
                'tetanos' => $request['tetanos'][$i],
                'fiebre_amarilla' => $request['fiebre_amarilla'][$i],
                'hepatitis_b'=> $request['hepatitis_b'][$i],
                'antirrabica' => $request['antirrabica'][$i],
                'otro_vacuna' => $request['otro_vacuna'][$i],
                'pve_requerido' => $request['pve_requerido'][$i],
                'recomendaciones' => $request['recomendaciones'][$i],
                'restricciones' => $request['restricciones'][$i],
                'remision_eps' => $request['remision_eps'][$i],
                'fecha_compromiso_asistencia_eps' => $request['fecha_compromiso_asistencia_eps'][$i],
                'asistencia_eps' => $request['asistencia_eps'][$i],
                't8_id' => $t8->id
            ]);
        }
        

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }

    public function edit(Request $request)
    {
        $t8 = T8::find($request['id']);
        $t8->codigo = $request['codigo'];
        $t8->version = $request['version'];
        $t8->fecha = $request['fecha'];
        $t8->save();

        
        
        $datos = count($request['apellidos_nombres']);

        for ($i=0; $i < $datos; $i++) { 
            $t8detalle = T8Detalle::find($request['t8detalle'][$i]);

            $t8detalle->apellidos_nombres = $request['apellidos_nombres'][$i];
            $t8detalle->centro_trabajo = $request['centro_trabajo'][$i];
            $t8detalle->tipo_examen = $request['tipo_examen'][$i];
            $t8detalle->fecha_examen = $request['fecha_examen'][$i];
            $t8detalle->musculo_esqueletico = $request['musculo_esqueletico'][$i];
            $t8detalle->dermatologico = $request['dermatologico'][$i];
            $t8detalle->respiratorio = $request['respiratorio'][$i];
            $t8detalle->cardiovascular = $request['cardiovascular'][$i];
            $t8detalle->trabajo_alturas = $request['trabajo_alturas'][$i];
            $t8detalle->test_fobias_trabajo_alturas = $request['test_fobias_trabajo_alturas'][$i];
            $t8detalle->otro = $request['otro'][$i];
            $t8detalle->espirometria = $request['espirometria'][$i];
            $t8detalle->audiometria = $request['audiometria'][$i];
            $t8detalle->optometria = $request['optometria'][$i];
            $t8detalle->visiometria = $request['visiometria'][$i];
            $t8detalle->electrocardiograma = $request['electrocardiograma'][$i];
            $t8detalle->examen_coordinacion_motriz = $request['examen_coordinacion_motriz'][$i];
            $t8detalle->examen_psicologia = $request['examen_psicologia'][$i];
            $t8detalle->otro_complementario = $request['otro_complementario'][$i];
            $t8detalle->cuadro_hematico = $request['cuadro_hematico'][$i];
            $t8detalle->glicemia_pre_pos = $request['glicemia_pre_pos'][$i];
            $t8detalle->perfil_lipido = $request['perfil_lipido'][$i];
            $t8detalle->parcial_orina = $request['parcial_orina'][$i];
            $t8detalle->otro_laboratorio = $request['otro_laboratorio'][$i];
            $t8detalle->tetanos = $request['tetanos'][$i];
            $t8detalle->fiebre_amarilla = $request['fiebre_amarilla'][$i];
            $t8detalle->hepatitis_b = $request['hepatitis_b'][$i];
            $t8detalle->antirrabica = $request['antirrabica'][$i];
            $t8detalle->otro_vacuna = $request['otro_vacuna'][$i];
            $t8detalle->pve_requerido = $request['pve_requerido'][$i];
            $t8detalle->recomendaciones = $request['recomendaciones'][$i];
            $t8detalle->restricciones = $request['restricciones'][$i];
            $t8detalle->remision_eps = $request['remision_eps'][$i];
            $t8detalle->fecha_compromiso_asistencia_eps = $request['fecha_compromiso_asistencia_eps'][$i];
            $t8detalle->asistencia_eps = $request['asistencia_eps'][$i];
            $t8detalle->save();
                            
        }
        

        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');
    }
}
