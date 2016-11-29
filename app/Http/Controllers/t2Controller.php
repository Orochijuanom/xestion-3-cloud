<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\T2;
use App\T2Detalle;
use App\T2Nota;

class t2Controller extends Controller
{
    public function form2(Request $request){

        $t2 = T2::create([
            'codigo' => $request['codigo'],
            'version' => $request['version'],
            'fecha' => $request['fecha'],
            'presupuesto_anio' => $request['presupuesto_anio'],
            'fecha_asignacion_presupuesto' => $request['fecha_asignacion_presupuesto'],
            'responsable_planificacion_presupuesto' => $request['responsable_planificacion_presupuesto'],
            'cargo_planificacion' => $request['cargo_planificacion'],
            'fecha_revision_presupuesto_primer_semestre' => $request['fecha_revision_presupuesto_primer_semestre'],
            'responsable_revision_presupuesto_primer_semestre' => $request['responsable_revision_presupuesto_primer_semestre'],
            'cargo_responsable_revision_primer_semestre' => $request['cargo_responsable_revision_primer_semestre'],
            'analisis_revision_primer_semestre' => $request['analisis_revision_primer_semestre'],
            'fecha_revision_presupuesto_segundo_semestre' => $request['fecha_revision_presupuesto_segundo_semestre'],
            'responsable_revision_presupuesto_segundo_semestre' => $request['responsable_revision_presupuesto_segundo_semestre'],
            'cargo_responsable_revision_segundo_semestre' => $request['cargo_responsable_revision_segundo_semestre'],
            'analisis_revision_segundo_semestre' => $request['analisis_revision_segundo_semestre'],
            'empresa_id' => $request['empresa_id'],

        ]);
        
        $datosDetalle = count($request['actividad']);

        for ($i=0; $i < $datosDetalle; $i++) { 
            T2Detalle::create([
                'actividad' => $request['actividad'][$i],
                'presupuesto' => $request['presupuesto'][$i],
                'ejecucion_primer_semestre' => $request['ejecucion_primer_semestre'][$i],
                'ejecucion_segundo_semestre' => $request['ejecucion_segundo_semestre'][$i],
                't2_id' => $t2->id
            ]);
        }

        $datosNota = count($request['fecha_nota']);

        for ($i=0; $i < $datosNota; $i++) { 
            T2Nota::create([
                'fecha_nota' => $request['fecha_nota'][$i],
                'cargo' => $request['cargo'][$i],
                'motivo' => $request['motivo'][$i],
                't2_id' => $t2->id
            ]);
        }

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }
}
