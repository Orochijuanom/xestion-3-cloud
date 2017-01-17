<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\T10;
use App\T10Detalle;

class t10controller extends Controller
{
    public function form10(Request $request){
        $t10 = T10::create([
            'codigo' => $request['codigo'],
            'version' => $request['versiont'],
            'fecha' => $request['fecha'],
            'empresa_id' => $request['empresa_id'],

        ]);
        
        $datos = count($request['proceso']);

        for ($i=0; $i < $datos; $i++) { 
            T10Detalle::create([
                'proceso' => $request['proceso'][$i],
                'tipo_documento' => $request['tipo_documento'][$i],
                'codigo_documento' => $request['codigo_documento'][$i],
                'nombre_documento' => $request['nombre_documento'][$i],
                'origen_interno' => $request['origen_interno'][$i],
                'origen_externo' => $request['origen_externo'][$i],
                'version' => $request['version'][$i],
                'fecha_version' => $request['fecha_version'][$i],
                'aprobado_por' => $request['aprobado_por'][$i],
                'medio_almacenamiento' => $request['medio_almacenamiento'][$i],
                'acceso' => $request['acceso'][$i],
                'proteccion' => $request['proteccion'][$i],
                'sitio_consulta_documento' => $request['sitio_consulta_documento'][$i],
                'sitio_consulta_registro_fisico' => $request['sitio_consulta_registro_fisico'][$i],
                'sitio_consulta_registro_digital' => $request['sitio_consulta_registro_digital'][$i],
                'tiempo_retencion' => $request['tiempo_retencion'][$i],
                'disposicion_final' => $request['disposicion_final'][$i],
                'motivo_cambio_version_documento' => $request['motivo_cambio_version_documento'][$i],
                't10_id' => $t10->id
            ]);
        }

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');
    }

    public function edit(Request $request)
    {
        $t10 = T10::find($request['id']);
        $t10->codigo = $request['codigo'];
        $t10->version = $request['versiont'];
        $t10->fecha = $request['fecha'];
        $t10->save();
        
        
        $datos = count($request['proceso']);

        for ($i=0; $i < $datos; $i++) { 
            $t10detalle = T10Detalle::find($request['t10detalle'][$i]);

            $t10detalle->proceso = $request['proceso'][$i];
            $t10detalle->tipo_documento = $request['tipo_documento'][$i];
            $t10detalle->codigo_documento = $request['codigo_documento'][$i];
            $t10detalle->nombre_documento = $request['nombre_documento'][$i];
            $t10detalle->origen_interno = $request['origen_interno'][$i];
            $t10detalle->origen_externo = $request['origen_externo'][$i];
            $t10detalle->version = $request['version'][$i];
            $t10detalle->fecha_version = $request['fecha_version'][$i];
            $t10detalle->aprobado_por = $request['aprobado_por'][$i];
            $t10detalle->medio_almacenamiento = $request['medio_almacenamiento'][$i];
            $t10detalle->acceso = $request['acceso'][$i];
            $t10detalle->proteccion = $request['proteccion'][$i];
            $t10detalle->sitio_consulta_documento = $request['sitio_consulta_documento'][$i];
            $t10detalle->sitio_consulta_registro_fisico = $request['sitio_consulta_registro_fisico'][$i];
            $t10detalle->sitio_consulta_registro_digital = $request['sitio_consulta_registro_digital'][$i];
            $t10detalle->tiempo_retencion = $request['tiempo_retencion'][$i];
            $t10detalle->disposicion_final = $request['disposicion_final'][$i];
            $t10detalle->motivo_cambio_version_documento = $request['motivo_cambio_version_documento'][$i];                
            $t10detalle->save();
        }

        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente'); 
    }
}
