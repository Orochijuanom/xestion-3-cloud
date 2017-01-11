<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T44;
use App\T44Meta;
use App\T44Planificar;
use App\T44Grafico1;
use App\T44PlanAccion;

class t44Controller extends Controller
{
    public function form44(Request $request){
        $t44 = T44::create([
            'codigo' => $request['codigo'],
            'fecha' => $request['fecha'],
            'version' => $request['version'],
            'objetivos_programa' => $request['objetivos_programa'],
            'alcance_programa' => $request['alcance_programa'],
            'politicas_id' => $request['politicas_id'],
            'objetivos_est_id' => $request['objetivos_est_id'],
            'responsable_id' => $request['responsable_id'],
            'recurso_id' => $request['recurso_id'],
            'empresa_id' => $request['empresa_id'],
        ]);

        $datosMeta = count($request['metas']);

        for ($i=0; $i < $datosMeta ; $i++) { 
            T44Meta::create([
                'meta' => $request['metas'][$i],
                'valor' => $request['valor'][$i],
                't44_id' => $t44->id
            ]);
        }

        $datosEne = count($request['ene_p']);
        
        for ($i=0; $i < $datosEne ; $i++) { 

            if (@$request->file('evidencias')[$i]){
                $file = $request->file('evidencias')[$i];
                //obtenemos el nombre del archivo
                $nombre = $file->getClientOriginalName();            
                //indicamos que queremos guardar un nuevo archivo en el disco local
                \Storage::disk('public')->put($nombre,  \File::get($file));
            }else{
                $nombre = "";
            }
            

            T44Planificar::create([
                'actividad' => $request['actividad'][$i],
                'ene_p' => $request['ene_p'][$i],
                'ene_e' => $request['ene_e'][$i],
                'feb_p' => $request['feb_p'][$i],
                'feb_e' => $request['feb_e'][$i],
                'mar_p' => $request['mar_p'][$i],
                'mar_e' => $request['mar_e'][$i],
                'abr_p' => $request['abr_p'][$i],
                'abr_e' => $request['abr_e'][$i],
                'may_p' => $request['may_p'][$i],
                'may_e' => $request['may_e'][$i],
                'jun_p' => $request['jun_p'][$i],
                'jun_e' => $request['jun_e'][$i],
                'jul_p' => $request['jul_p'][$i],
                'jul_e' => $request['jul_e'][$i],
                'ago_p' => $request['ago_p'][$i],
                'ago_e' => $request['ago_e'][$i],
                'sep_p' => $request['sep_p'][$i],
                'sep_e' => $request['sep_e'][$i],
                'oct_p' => $request['oct_p'][$i],
                'oct_e' => $request['oct_e'][$i],
                'nov_p' => $request['oct_p'][$i],
                'nov_e' => $request['oct_e'][$i],
                'dic_p' => $request['nov_p'][$i],
                'dic_e' => $request['nov_e'][$i],
                'evidencias' => $nombre,
                'responsable_plan_id' => $request['responsable_plan_id'][$i],
                't44_id' => $t44->id
            ]);

            
        }

        $datosGrafico = count($request['nombre_grafico']);
            
            for ($i=0; $i < $datosGrafico; $i++) {
                for ($j=0; $j < 4; $j++) {
                     if(isset($request['numero_grafico'][$i])){
                        $numero_grafico = $request['numero_grafico'][$i];
                    }else{
                        $numero_grafico = "";
                    }

                    if(isset($request['nombre_grafico'][$i])){
                        $nombre_grafico = $request['nombre_grafico'][$i];
                    }else{
                        $nombre_grafico = "";
                    }

                    if(isset($request['metodo_calculo'][$i])){
                        $metodo_calculo = $request['metodo_calculo'][$i];
                    }else{
                        $metodo_calculo = "";
                    }

                    if(isset($request['frecuencia_medicion_reporte'][$i])){
                        $frecuencia_medicion_reporte = $request['frecuencia_medicion_reporte'][$i];
                    }else{
                        $frecuencia_medicion_reporte = "";
                    }

                    if(isset($request['objetivo'][$i][$frecuencia_medicion_reporte][$j])){
                        $objetivo = $request['objetivo'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $objetivo = "";
                    }

                    if(isset($request['descripcion'][$i][$frecuencia_medicion_reporte][$j])){
                        $descripcion = $request['descripcion'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $descripcion = "";
                    }

                    if(isset($request['analisis'][$i][$frecuencia_medicion_reporte][$j])){
                        $analisis = $request['analisis'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $analisis = "";
                    }

                    if(isset($request['valor1'][$i][$frecuencia_medicion_reporte][$j])){
                        $valor1 = $request['valor1'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $valor1 = "";
                    }

                    if(isset($request['valor2'][$i][$frecuencia_medicion_reporte][$j])){
                        $valor2 = $request['valor2'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $valor2 = "";
                    }

                    if(isset($request['valor3'][$i][$frecuencia_medicion_reporte][$j])){
                        $valor3 = $request['valor3'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $valor3 = "";
                    }

                    if(isset($request['meta'][$i][$frecuencia_medicion_reporte][$j])){
                        $meta = $request['meta'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $meta = "";
                    }

                    T44Grafico1::create([
                        'numero_grafico' => $numero_grafico,
                        'nombre_grafico' => $nombre_grafico,
                        'objetivo' => $objetivo,
                        'descripcion' => $descripcion,
                        'metodo_calculo' => $metodo_calculo,
                        'frecuencia_medicion_reporte' => $frecuencia_medicion_reporte,
                        'analisis' => $analisis,
                        'valor1' => $valor1,
                        'valor2' => $valor2,
                        'valor3' => $valor3,
                        'meta' => $meta,
                        't44_id' => $t44->id
                    ]);

                 }
            }
            
        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }



    public function edit(Request $request){
        $t44 = T44::find($request['id']);

        $t44->codigo = $request['codigo'];
        $t44->fecha = $request['fecha'];
        $t44->version = $request['version'];
        $t44->objetivos_programa = $request['objetivos_programa'];
        $t44->alcance_programa = $request['alcance_programa'];
        $t44->politicas_id = $request['politicas_id'];
        $t44->objetivos_est_id = $request['objetivos_est_id'];
        $t44->responsable_id = $request['responsable_id'];
        $t44->recurso_id = $request['recurso_id'];            
        $t44->save();

        $datosMeta = count($request['metas']);

        for ($i=0; $i < $datosMeta ; $i++) { 
            $t44meta = T44Meta::find($request['t44meta_id'][$i]);
            $t44meta->meta = $request['metas'][$i];
            $t44meta->valor = $request['valor'][$i];                
            $t44meta->save();
        }

        $datosEne = count($request['ene_p']);

        for ($i=0; $i < $datosEne ; $i++) { 
            $t44planificar = T44Planificar::find($request['t44planificar'][$i]);
            $t44planificar->actividad = $request['actividad'][$i];
            $t44planificar->ene_p = $request['ene_p'][$i];
            $t44planificar->ene_e = $request['ene_e'][$i];
            $t44planificar->feb_p = $request['feb_p'][$i];
            $t44planificar->feb_e = $request['feb_e'][$i];
            $t44planificar->mar_p = $request['mar_p'][$i];
            $t44planificar->mar_e = $request['mar_e'][$i];
            $t44planificar->abr_p = $request['abr_p'][$i];
            $t44planificar->abr_e = $request['abr_e'][$i];
            $t44planificar->may_p = $request['may_p'][$i];
            $t44planificar->may_e = $request['may_e'][$i];
            $t44planificar->jun_p = $request['jun_p'][$i];
            $t44planificar->jun_e = $request['jun_e'][$i];
            $t44planificar->jul_p = $request['jul_p'][$i];
            $t44planificar->jul_e = $request['jul_e'][$i];
            $t44planificar->ago_p = $request['ago_p'][$i];
            $t44planificar->ago_e = $request['ago_e'][$i];
            $t44planificar->sep_p = $request['sep_p'][$i];
            $t44planificar->sep_e = $request['sep_e'][$i];
            $t44planificar->oct_p = $request['oct_p'][$i];
            $t44planificar->oct_e = $request['oct_e'][$i];
            $t44planificar->nov_p = $request['oct_p'][$i];
            $t44planificar->nov_e = $request['oct_e'][$i];
            $t44planificar->dic_p = $request['nov_p'][$i];
            $t44planificar->dic_e = $request['nov_e'][$i];
            //$t44planificar->evidencias = $request['evidencias'][$i];
            $t44planificar->responsable_plan_id = $request['responsable_plan_id'][$i];                
            $t44planificar->save();

            
        }

        $datosGrafico = count($request['nombre_grafico']);
            
            for ($i=0; $i < $datosGrafico; $i++) {
                for ($j=0; $j < 4; $j++) {
                     if(isset($request['numero_grafico'][$i])){
                        $numero_grafico = $request['numero_grafico'][$i];
                    }else{
                        $numero_grafico = "";
                    }

                    if(isset($request['nombre_grafico'][$i])){
                        $nombre_grafico = $request['nombre_grafico'][$i];
                    }else{
                        $nombre_grafico = "";
                    }

                    if(isset($request['metodo_calculo'][$i])){
                        $metodo_calculo = $request['metodo_calculo'][$i];
                    }else{
                        $metodo_calculo = "";
                    }

                    if(isset($request['frecuencia_medicion_reporte'][$i])){
                        $frecuencia_medicion_reporte = $request['frecuencia_medicion_reporte'][$i];
                    }else{
                        $frecuencia_medicion_reporte = "";
                    }

                    if(isset($request['objetivo'][$i][$frecuencia_medicion_reporte][$j])){
                        $objetivo = $request['objetivo'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $objetivo = "";
                    }

                    if(isset($request['descripcion'][$i][$frecuencia_medicion_reporte][$j])){
                        $descripcion = $request['descripcion'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $descripcion = "";
                    }

                    if(isset($request['analisis'][$i][$frecuencia_medicion_reporte][$j])){
                        $analisis = $request['analisis'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $analisis = "";
                    }

                    if(isset($request['valor1'][$i][$frecuencia_medicion_reporte][$j])){
                        $valor1 = $request['valor1'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $valor1 = "";
                    }

                    if(isset($request['valor2'][$i][$frecuencia_medicion_reporte][$j])){
                        $valor2 = $request['valor2'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $valor2 = "";
                    }

                    if(isset($request['valor3'][$i][$frecuencia_medicion_reporte][$j])){
                        $valor3 = $request['valor3'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $valor3 = "";
                    }

                    if(isset($request['meta'][$i][$frecuencia_medicion_reporte][$j])){
                        $meta = $request['meta'][$i][$frecuencia_medicion_reporte][$j];
                    }else{
                        $meta = "";
                    }

                    $t44grafico = T44Grafico1::find($request['t44grafico'][$i]);
                    $t44grafico->numero_grafico = $numero_grafico;
                    $t44grafico->nombre_grafico = $nombre_grafico;
                    $t44grafico->objetivo = $objetivo;
                    $t44grafico->descripcion = $descripcion;
                    $t44grafico->metodo_calculo = $metodo_calculo;
                    $t44grafico->frecuencia_medicion_reporte = $frecuencia_medicion_reporte;
                    $t44grafico->analisis = $analisis;
                    $t44grafico->valor1 = $valor1;
                    $t44grafico->valor2 = $valor2;
                    $t44grafico->valor3 = $valor3;
                    $t44grafico->meta = $meta;
                        
                    $t44grafico->save();

                 }
            }
            
        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');
    }
    
}
