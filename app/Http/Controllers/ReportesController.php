<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

use App\Empleados;
use App\T11;
use App\T1;
use App\T2;
use App\T3;
use App\T4;
use App\T5;
use App\T6;
use App\T7;
use App\T8;
use App\T9;
use App\T10;
use App\T12;

class ReportesController extends Controller
{
    public function empleado($id){
        $empleado = Empleados::find($id);
        Excel::create('Empleado'.$empleado->cedula, function($excel) use($empleado){

            $excel->sheet('Datos', function($sheet) use($empleado){
                
                $empleadoArray = $empleado->getAttributes();

                if($empleadoArray['sexo'] == 1){
                    $empleadoArray['sexo'] = 'Hombre';
                }elseif($empleadoArray['sexo'] == 2){
                    $empleadoArray['sexo'] = 'Mujer';
                }else{
                    $empleadoArray['sexo'] = 'Otro';
                }

                if($empleadoArray['estado_civil'] == 1){
                    $empleadoArray['estado_civil'] = 'Soltero';
                }elseif($empleadoArray['estado_civil'] == 2){
                    $empleadoArray['estado_civil'] = 'Casado';
                }elseif($empleadoArray['estado_civil'] == 3){
                    $empleadoArray['estado_civil'] = 'Separado';
                }else{
                    $empleadoArray['estado_civil'] = 'Viudo';
                }

                $empleadoArray['cargo'] = $empleado->cargos->cargo;

                if($empleadoArray['horario_trabajo'] == 1){
                    $empleadoArray['horario_trabajo'] = '8 horas';
                }elseif($empleadoArray['horario_trabajo'] == 2){
                    $empleadoArray['horario_trabajo'] = '12 horas';
                }else{
                    $empleadoArray['horario_trabajo'] = '24 horas';
                }

                if($empleadoArray['grupo_sanguineo'] == 1){
                    $empleadoArray['grupo_sanguineo'] = 'O-';
                }elseif($empleadoArray['grupo_sanguineo'] == 2){
                    $empleadoArray['grupo_sanguineo'] = 'O+';
                }elseif($empleadoArray['grupo_sanguineo'] == 3){
                    $empleadoArray['grupo_sanguineo'] = 'A-';
                }elseif($empleadoArray['grupo_sanguineo'] == 4){
                    $empleadoArray['grupo_sanguineo'] = 'A+';
                }elseif($empleadoArray['grupo_sanguineo'] == 5){
                    $empleadoArray['grupo_sanguineo'] = 'B-';
                }elseif($empleadoArray['grupo_sanguineo'] == 6){
                    $empleadoArray['grupo_sanguineo'] = 'B+';
                }elseif($empleadoArray['grupo_sanguineo'] == 7){
                    $empleadoArray['grupo_sanguineo'] = 'AB-';
                }else{
                    $empleadoArray['grupo_sanguineo'] = 'AB+';
                }

                if($empleadoArray['apto_medicamente'] == 1){
                    $empleadoArray['apto_medicamente'] = 'Si';
                }else{
                    $empleadoArray['apto_medicamente'] = 'No';
                }

                if($empleadoArray['concepto_trabaja_alturas'] == 1){
                    $empleadoArray['concepto_trabaja_alturas'] = 'Si';
                }else{
                    $empleadoArray['concepto_trabaja_alturas'] = 'No';
                }

                if($empleadoArray['concepto_trabaja_espacio_confinado'] == 1){
                    $empleadoArray['concepto_trabaja_espacio_confinado'] = 'Si';
                }else{
                    $empleadoArray['concepto_trabaja_espacio_confinado'] = 'No';
                }

                if($empleadoArray['registro_entrega_dotacion'] == 1){
                    $empleadoArray['registro_entrega_dotacion'] = 'Si';
                }else{
                    $empleadoArray['registro_entrega_dotacion'] = 'No';
                }

                if($empleadoArray['tetano'] == 1){
                    $empleadoArray['tetano'] = 'Si';
                }else{
                    $empleadoArray['tetano'] = 'No';
                }

                if($empleadoArray['fiebre_amarilla'] == 1){
                    $empleadoArray['fiebre_amarilla'] = 'Si';
                }else{
                    $empleadoArray['fiebre_amarilla'] = 'No';
                }

                if($empleadoArray['hepatitis'] == 1){
                    $empleadoArray['hepatitis'] = 'Si';
                }else{
                    $empleadoArray['hepatitis'] = 'No';
                }

                if($empleadoArray['antirrabica'] == 1){
                    $empleadoArray['antirrabica'] = 'Si';
                }else{
                    $empleadoArray['antirrabica'] = 'No';
                }

                if($empleadoArray['otra'] == 1){
                    $empleadoArray['otra'] = 'Si';
                }else{
                    $empleadoArray['otra'] = 'No';
                }

                if($empleadoArray['sst'] == 1){
                    $empleadoArray['sst'] = 'Si';
                }else{
                    $empleadoArray['sst'] = 'No';
                }

                if($empleadoArray['ambiente'] == 1){
                    $empleadoArray['ambiente'] = 'Si';
                }else{
                    $empleadoArray['ambiente'] = 'No';
                }

                if($empleadoArray['tecnicas'] == 1){
                    $empleadoArray['tecnicas'] = 'Si';
                }else{
                    $empleadoArray['tecnicas'] = 'No';
                }

                if($empleadoArray['calidad'] == 1){
                    $empleadoArray['calidad'] = 'Si';
                }else{
                    $empleadoArray['calidad'] = 'No';
                }

                $empleadoArray['eps'] = $empleado->epss->eps;

                $empleadoArray['arl'] = $empleado->arls->arl;

                $empleadoArray['afp'] = $empleado->afps->afp;

                $empleadoArray['caja_compensacion'] = $empleado->cajas->caja;

                $empleadoArray['empresa_id'] = $empleado->empresa->nombre_empresa;
                
                $sheet->fromArray(array($empleadoArray));

                });

        })->export('xls');
    }

    public function t11($id){
        $t11 = T11::find($id);
        Excel::create('Ficha tecnica indicadores-'.$t11->version.'-'.$t11->fecha, function($excel) use($t11){

            $excel->sheet('Datos', function($sheet) use($t11){
            
            $t11Array = $t11->T11Detalle->toArray();
            
            for ($i=0; $i < count($t11Array) ; $i++) {
                if($t11Array[$i]['metodo_calculo'] == 1){
                    $t11Array[$i]['metodo_calculo'] = 'Cero Accidentes';
                }elseif($t11Array[$i]['metodo_calculo'] == 2){
                    $t11Array[$i]['metodo_calculo'] = '(Nro actividades ejecutadas/ Nro actividades programadas)*100';
                }else{
                    $t11Array[$i]['metodo_calculo'] = '(Sumatoria de puntaje obtenido / sumatoria puntaje posible)*100';
                }

                if($t11Array[$i]['frecuencia_medicion_reporte'] == 1){
                    $t11Array[$i]['frecuencia_medicion_reporte'] = 'Anual';
                }elseif($t11Array[$i]['frecuencia_medicion_reporte'] == 2){
                    $t11Array[$i]['frecuencia_medicion_reporte'] = 'Semestral';
                }else{
                    $t11Array[$i]['frecuencia_medicion_reporte'] = 'Trimestral';
                }

                $t11Array[$i]['responsable_calculo_seguimiento'] = $t11->T11Detalle[$i]->empleado->nombre_apellidos;
                
            }

            $sheet->fromArray($t11Array);   

            }); 

            $excel->sheet('Seguimiento', function($sheet) use($t11) {
                $t11GraficoArray = $t11->T11Detalle[0]->T11Grafico->toArray();
                $sheet->fromArray($t11GraficoArray);   
            });

        })->export('xls');
    }

    public function t1($id){
        $t1 = T1::find($id);
        Excel::create('objetivos del sistema de gestion-'.$t1->version.'-'.$t1->fecha, function($excel) use($t1){

            $excel->sheet('Datos', function($sheet) use($t1){
            
            $t1Array = $t1->T1Detalles->toArray();
            
            for ($i=0; $i < count($t1Array) ; $i++) {
                
                $t1Array[$i]['numero_indicador'] = $t1->T1Detalles[$i]->numero_indicadore->T11Detalle[0]->ficha_numero.' - '.$t1->T1Detalles[$i]->numero_indicadore->T11Detalle[0]->nombre_indicador;
                
            }
        
            $sheet->fromArray($t1Array);   

            }); 

        })->export('xls');
    }

    public function t2($id){
        $t2 = T2::find($id);
        Excel::create('presupuesto del sistema de gestion-'.$t2->version.'-'.$t2->fecha, function($excel) use($t2){

            $excel->sheet('Datos', function($sheet) use($t2){
            
            $t2Array = $t2->T2Detalles->toArray();
            
            
            $t2DataArray = $t2->select('fecha', 'presupuesto_anio', 'fecha_asignacion_presupuesto', 'responsable_planificacion_presupuesto', 'fecha_revision_presupuesto_primer_semestre', 'responsable_revision_presupuesto_primer_semestre', 'analisis_revision_primer_semestre', 'fecha_revision_presupuesto_segundo_semestre', 'responsable_revision_presupuesto_segundo_semestre', 'analisis_revision_segundo_semestre')->first()->toArray();
            
            $t2DataArray['responsable_revision_presupuesto_primer_semestre'] = $t2->responsable_revision_presupuesto_primer_s->nombre_apellidos;
            
            $t2DataArray['responsable_revision_presupuesto_segundo_semestre'] = $t2->responsable_revision_presupuesto_segundo_s->nombre_apellidos;
            
            $sheet->fromArray(array($t2DataArray));
              

            });

            $excel->sheet('Información presupuesto', function($sheet) use($t2){
            
            $t2Array = $t2->T2Detalles->toArray();
        
            $sheet->fromArray($t2Array);
              

            });  

        })->export('xls');
    }

    public function t3($id){
        $t3 = T3::find($id);
        Excel::create('matriz de requisitos legales-'.$t3->version.'-'.$t3->fecha, function($excel) use($t3){

            $excel->sheet('Datos', function($sheet) use($t3){            
            
            $t3DataArray = $t3->select('fecha_actualizacion', 'motivo_actualizacion', 'responsable_actualizacion', 'revisado_por', 'evaluacion_cumplimiento_primer_semestre', 'evaluacion_cumplimiento_segundo_semestre')->first()->toArray();
            
            $t3DataArray['responsable_actualizacion'] = $t3->responsable->nombre_apellidos;
            
            $t3DataArray['revisado_por'] = $t3->revisado->nombre_apellidos;
            
            $sheet->fromArray(array($t3DataArray));
              

            });

            $excel->sheet('Información legal', function($sheet) use($t3){
            
            $t3Array = $t3->detalles->toArray();

            for ($i=0; $i < count($t3Array); $i++) { 
                $t3Array[$i]['responsable_cumplimiento'] = $t3->detalles[$i]->responsable->nombre_apellidos;
            }
        
            $sheet->fromArray($t3Array);
              

            });  

        })->export('xls');
    }

    public function t4($id){
        $t4 = T4::find($id);
        Excel::create('matriz de requisitos peligros-'.$t4->version.'-'.$t4->fecha, function($excel) use($t4){

            $excel->sheet('Datos', function($sheet) use($t4){            
            
            $t4DataArray = $t4->select('area', 'procesos', 'cargo_id', 'fecha_elaboracion', 'responsable_elaboracion', 'fecha_actualizacion')->first()->toArray();
            
            $t4DataArray['responsable_elaboracion'] = $t4->empleado->nombre_apellidos;
            
            $t4DataArray['cargo_id'] = $t4->cargo->cargo;
            
            $sheet->fromArray(array($t4DataArray));
              

            });

            $excel->sheet('Información peligros', function($sheet) use($t4){
            
            $t4Array = $t4->t4Detalles->toArray();

            for ($i=0; $i < count($t4Array); $i++) { 
                $t4Array[$i]['cargo_id'] = $t4->t4Detalles[$i]->cargo->cargo;
            }
        
            $sheet->fromArray($t4Array);
              

            });

            $excel->sheet('clasificacion peligros', function($sheet) use($t4){

            $t4ClasificacionesArray = array();
            foreach ($t4->t4Detalles as $t4Detalles) {
                $x=0;
                foreach ($t4Detalles->t4Clasificaciones as $t4Clasificaciones) {
                    array_push($t4ClasificacionesArray, $t4Clasificaciones->toArray());
                    $t4ClasificacionesArray[$x]['descripcion_efecto_id'] = $t4Clasificaciones->descripcionEfecto->efecto->efecto;
                    $t4ClasificacionesArray[$x]['t4_detalle_id'] = $t4Clasificaciones->T4Detalle->cargo->cargo;
                    $x++;
                }
                
            }
        
            $sheet->fromArray($t4ClasificacionesArray);
              

            });

            $excel->sheet('charlas', function($sheet) use($t4){
                
            $t4CharlasArray = array();
            foreach ($t4->t4Detalles as $t4Detalles) {
                $x=0;
                foreach ($t4Detalles->t4Charlas as $t4Charlas) {
                    array_push($t4CharlasArray, $t4Charlas->toArray());
                    $t4CharlasArray[$x]['charlas_id'] = $t4Charlas->charla->charla;
                    $t4CharlasArray[$x]['t4_detalle_id'] = $t4Charlas->T4Detalle->cargo->cargo;
                    $x++;
                }
                
            }
        
            $sheet->fromArray($t4CharlasArray);
              

            });

            $excel->sheet('capacitaciones', function($sheet) use($t4){
                
            $t4CapacitacionesArray = array();
            foreach ($t4->t4Detalles as $t4Detalles) {
                $x=0;
                foreach ($t4Detalles->t4Capacitaciones as $t4Capacitaciones) {
                    array_push($t4CapacitacionesArray, $t4Capacitaciones->toArray());
                    $t4CapacitacionesArray[$x]['Capacitaciones_id'] = $t4Capacitaciones->capacitacion->capacitacion;
                    $t4CapacitacionesArray[$x]['t4_detalle_id'] = $t4Capacitaciones->T4Detalle->cargo->cargo;
                    $x++;
                }
                
            }
        
            $sheet->fromArray($t4CapacitacionesArray);
              

            });

            $excel->sheet('epps', function($sheet) use($t4){
                
            $t4EppsArray = array();
            foreach ($t4->t4Detalles as $t4Detalles) {
                $x=0;
                foreach ($t4Detalles->t4Epps as $t4Epps) {
                    array_push($t4EppsArray, $t4Epps->toArray());
                    $t4EppsArray[$x]['epps_id'] = $t4Epps->epp->epp;
                    $t4EppsArray[$x]['t4_detalle_id'] = $t4Epps->T4Detalle->cargo->cargo;
                    $x++;
                }
                
            }
        
            $sheet->fromArray($t4EppsArray);
              

            });    

        })->export('xls');
    }

    public function t5($id){
        $t5 = T5::find($id);
        Excel::create('matriz de elementos de protección personal-'.$t5->version.'-'.$t5->fecha, function($excel) use($t5){

            $excel->sheet('Datos', function($sheet) use($t5){            
            
            $t5DataArray = $t5->T5Detalles->toArray();
            
            
            
            for ($i=0; $i < count($t5DataArray); $i++) { 
                $t5DataArray[$i]['cargo_id'] = $t5->T5Detalles[$i]->empleado->cargos->cargo;
            }  

            $sheet->fromArray($t5DataArray);
            });

        })->export('xls');
    }

    public function t6($id){
        $t6 = T6::find($id);
        Excel::create('matriz de seguimiento de acciones correctivas-'.$t6->version.'-'.$t6->fecha, function($excel) use($t6){

            $excel->sheet('Datos', function($sheet) use($t6){            
            
            $t6DataArray = $t6->t6Detalles->toArray();
            
            
            
            for ($i=0; $i < count($t6DataArray); $i++) { 
                $t6DataArray[$i]['nombre_quien_reporta'] = $t6->T6Detalles[$i]->nombre_reporta->nombre_apellidos;
            }  

            $sheet->fromArray($t6DataArray);
            });

        })->export('xls');
    }

    public function t7($id){
        $t7 = T7::find($id);
        Excel::create('matriz de seguimiento a comites-'.$t7->version.'-'.$t7->fecha, function($excel) use($t7){

            $excel->sheet('Datos', function($sheet) use($t7){            
            
            $t7DataArray = $t7->T7Detalles->toArray(); 

            $sheet->fromArray($t7DataArray);
            });

        })->export('xls');
    }

    public function t8($id){
        $t8 = T8::find($id);
        Excel::create('matriz de examenes ocupacionales-'.$t8->version.'-'.$t8->fecha, function($excel) use($t8){

            $excel->sheet('Datos', function($sheet) use($t8){            
            
            $t8DataArray = $t8->t8Detalles->toArray();

            for ($i=0; $i < count($t8DataArray); $i++) { 
                $t8DataArray[$i]['apellidos_nombres'] = $t8->T8Detalles[$i]->empleado->nombre_apellidos;
            }  

            $sheet->fromArray($t8DataArray);
            });

        })->export('xls');
        
    }

    public function t9($id){
        $t9 = T9::find($id);
        Excel::create('profesiograma-'.$t9->version.'-'.$t9->fecha, function($excel) use($t9){

            $excel->sheet('Datos', function($sheet) use($t9){            
            
            $t9DataArray = $t9->detalles->toArray();

            for ($i=0; $i < count($t9DataArray); $i++) { 
                $t9DataArray[$i]['cargo_id'] = $t9->detalles[$i]->cargo->cargo;
            }  

            $sheet->fromArray($t9DataArray);
            });

        })->export('xls');
    }

    public function t10($id){
        $t10 = T10::find($id);
        Excel::create('listado maestro de documentos y control de registros-'.$t10->version.'-'.$t10->fecha, function($excel) use($t10){

            $excel->sheet('Datos', function($sheet) use($t10){            
            
            $t10DataArray = $t10->t10Detalles->toArray();

            for ($i=0; $i < count($t10DataArray); $i++) { 
                $t10DataArray[$i]['aprobado_por'] = $t10->t10Detalles[$i]->aprobado->nombre_apellidos;
            }  

            $sheet->fromArray($t10DataArray);
            });

        })->export('xls');
    }

    public function t12($id){
        $t12 = T12::find($id);
        Excel::create('Ficha tecnica de capacitaciones-'.$t12->version.'-'.$t12->fecha, function($excel) use($t12){

            $excel->sheet('Datos', function($sheet) use($t12){
            
            $t12DataArray = $t12->t12Detalles->toArray();
            
            $sheet->fromArray($t12DataArray);
              

            });

            $excel->sheet('Cargo', function($sheet) use($t12){
            
            $t12Array = array();
            $x=0;
            foreach ($t12->t12Detalles as $t12detalles) {
                
                foreach ($t12detalles->t12cargos as $t12cargos) {
                    array_push($t12Array, $t12cargos->toArray(  ));
                    
                    $t12Array[$x]['cargo_id'] = $t12cargos->cargo->cargo;
                    $x++;
                }
                
            }
            
            
            $sheet->fromArray($t12Array);
              

            });

        })->export('xls');
    }

    /*public function t12_1($id){
        $t12_1 = T12_1::find($id);
        Excel::create('Capacitaciones por persona-'.$t12_1->t12.'-'.$t10->fecha, function($excel) use($t10){

            $excel->sheet('Datos', function($sheet) use($t10){            
            
            $t10DataArray = $t10->t10Detalles->toArray();

            for ($i=0; $i < count($t10DataArray); $i++) { 
                $t10DataArray[$i]['aprobado_por'] = $t10->t10Detalles[$i]->aprobado->nombre_apellidos;
            }  

            $sheet->fromArray($t10DataArray);
            });

        })->export('xls');
    }*/
}
