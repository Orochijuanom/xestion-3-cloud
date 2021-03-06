@extends('layouts.app')

@section('content')

<head>
	             <link href="/css/programa.css" rel="stylesheet" type="text/css"/>
		            <style>
          .thumb {
            height: 70px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>PRESUPUESTO SGSST</title>
		<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Courier"; font-size:small }
	</style>
	
</head>

<body>
<a href="/cloud/form/l1">Inicio</a> / <a href="/cloud/form/t2/{{$t2->empresa->id}}">t2</a> / <a href="#">Ver editar t2</a>
<br/><br/><br/>
@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> Hubo Algunos problemas con tu entrada.<br><br>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@if (Session::get('flash_message'))
<div class="alert alert-success">
	{{Session::get('flash_message')}}
	<br><br>            
</div>
@endif
<form method="POST" action="/cloud/form/2/ver">
{{ csrf_field() }}
{{ method_field('PUT') }}
<table cellspacing="0" border="0">
	<colgroup width="276"></colgroup>
	<colgroup width="150"></colgroup>
	<colgroup width="208"></colgroup>
	<colgroup width="177"></colgroup>
	<colgroup width="172"></colgroup>
	<colgroup width="178"></colgroup>
	<colgroup width="155"></colgroup>
	<colgroup width="206"></colgroup>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=3 height="100" align="center" valign=middle sdnum="1033;0;General_)"><b><img style="width:200px; heigth:200px;" src="/images/{{$t2->empresa->logo}}" />
        <br />
        <output id="list"></output></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 rowspan=2 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>{{$t2->empresa->nombre_empresa}}
		<input type="hidden" value="{{$t2->empresa->id}}" name="empresa_id" /></b></td>
		<input type="hidden" value="{{$t2->id}}" name="id" /></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" align="left" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2> Codigo:<input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" value="{{$t2->codigo}}">   </font></b></td>
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" align="left" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Versión:<input class="codigo" placeholder="version" type="text" required name="version" value="{{$t2->version}}"> </font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>PRESUPUESTO DEL SISTEMA DE GESTION </font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" align="left" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Fecha:<input class="codigo" placeholder="fecha" type="date" required name="fecha" value="{{$t2->fecha}}"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=9 height="20" align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="30" align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Presupuesto año</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Fecha asignación de presupuesto</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Responsable planificación de presupuesto</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Apellidos y Nombres</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="30" align="center" valign=middle sdnum="1033;0;General_)"><font face="Arial"><br><input class="centrado" placeholder="Presupuesto" type="text" required name="presupuesto_anio" value="{{$t2->presupuesto_anio}}"></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdnum="1033;0;General_)"><font face="Arial"><br><input class="codigo" placeholder="fecha" type="date" required name="fecha_asignacion_presupuesto" value="{{$t2->fecha_asignacion_presupuesto}}"></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2><br>
		<select class="form-control" name="responsable_planificacion_presupuesto" required>
			@foreach ($empleados as $empleado)
				@if ($t2->responsable_planificacion_presupuesto == $empleado->id)
				
					<option value="{{$empleado -> id}}" selected>{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
				@else

					<option value="{{$empleado -> id}}">{{$empleado->nombres_apellidos}} - {{$empleado->cargos->cargo}}</option>

				@endif
			@endforeach
		</select>
		</font></b></td>
		
	</tr>
	<tr>
		<td style="border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=9 height="20" align="center" sdnum="1033;0;General_)"><font face="Arial" size=2><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="44" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;General_)"><b><font face="Arial" size=2 color="#000000">ACTIVIDAD</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;General_)"><b><font face="Arial" size=2 color="#000000"> Presupuesto - Año 2016 </font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;_-* #,##0 _P_t_s_-;-* #,##0 _P_t_s_-;_-* &quot;-&quot;?? _P_t_s_-;_-@_-"><b><font face="Arial" size=2 color="#000000"> Ejecución primer Semestre </font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;General_)"><b><font face="Arial" size=2 color="#000000">% Ejecución Acumulado</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;_-* #,##0 _P_t_s_-;-* #,##0 _P_t_s_-;_-* &quot;-&quot;?? _P_t_s_-;_-@_-"><b><font face="Arial" size=2 color="#000000"> Ejecución segundo. Semestre </font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;General_)"><b><font face="Arial" size=2>% Ejecución Acumulado</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;General_)"><b><font face="Arial" size=2> Presupuesto Ejecutado</font></b></td>
	</tr>
	@foreach($t2->t2Detalles as $t2Detalle)
	<tr>
		<input type="hidden" name="t2detalle[]" value="{{$t2Detalle->id}}" />
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="37" align="left" valign=middle sdnum="1033;0;General_)"><font face="Arial" size=2 color="#000000"><textarea class="campo" placeholder=""  name="actividad[]">{{$t2Detalle->actividad}}</textarea><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle sdnum="1033;0;&quot;$&quot; #,##0;[RED]&quot;$&quot; #,##0"><b><font face="Arial" size=2 color="#0000FF"><textarea class="campo" placeholder=""  id="presupuesto_{{$loop->index}}"name="presupuesto[]">{{$t2Detalle->presupuesto}}</textarea></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle  sdnum="1033;0;&quot;$&quot;#,##0"><font face="Arial" size=2 color="#000000"><textarea class="campo" placeholder=""  id="ejecucion_primer_semestre_{{$loop->index}}" name="ejecucion_primer_semestre[]" onchange="calcular_porcentaje({{$loop->index}})" ondblclick="calcular_porcentaje({{$loop->index}})">{{$t2Detalle->ejecucion_primer_semestre}}</textarea><br></font></td>
		<td id="acumulado_uno_{{$loop->index}}" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" bgcolor="#50b308" sdnum="1033;0;0.00%"><font face="Arial" size=2 color="#000000"></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle  sdnum="1033;0;&quot;$&quot;#,##0"><font face="Arial" size=2 color="#000000"><textarea class="campo" placeholder=""  name="ejecucion_segundo_semestre[]" id="ejecucion_segundo_semestre_{{$loop->index}}" onchange="calcular_porcentaje2({{$loop->index}})" ondblclick="calcular_porcentaje2({{$loop->index}})">{{$t2Detalle->ejecucion_segundo_semestre}}</textarea><br></font></td>
		<td id="acumulado_dos_{{$loop->index}}" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" bgcolor="#50b308" sdnum="1033;0;0.00%"><font face="Arial" size=2 color="#000000"></font></td>
		<td id="acumulado_total_{{$loop->index}}" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle sdval="0" sdnum="1033;0;0"><b><font face="Arial" size=2></font></b></td>
	</tr>
	@endforeach
	<tr>
		<td style="border-top: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=9 height="24" align="center" valign=top bgcolor="#50b308" sdnum="1033;0;General_)"><b><font face="Arial" size=2>NOTAS DE  AJUSTE PRESUPUESTAL</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="40" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;General_)"><b><font face="Arial" size=2>Fecha del ajuste</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;General_)"><b><font face="Arial" size=2>Cargo responsable del  ajuste</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=6 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;0%"><b><font face="Arial" size=2>Motivo del ajuste presupuestal</font></b></td>
	</tr>
	@foreach($t2->t2Notas as $t2Nota)
	<tr>		
		<input type="hidden" name="t2nota[]" value="{{$t2Nota->id}}" />
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="40" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;General_)"><b><font face="Arial" size=2><input class="codigo" placeholder="fecha" type="date" required name="fecha_nota[]" value="{{$t2Nota->fecha_nota}}"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;General_)"><b><font face="Arial" size=2><textarea class="campo" placeholder=""  name="cargo[]">{{$t2Nota->cargo}}</textarea><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=6 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;0%"><b><font face="Arial" size=2><textarea class="campo" placeholder=""  name="motivo[]">{{$t2Nota->motivo}}</textarea><br></font></b></td>
	</tr>
	@endforeach
	<tr>
		<td style="border-top: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=9 height="20" align="center" valign=top bgcolor="#50b308" sdnum="1033;0;General_)"><b><font face="Arial" size=2>REVISION DEL PRESUPUESTO</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 height="67" align="left" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Fecha de revisión del presupuesto</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle sdnum="1033;0;General_)"><font face="Arial" size=2><input class="codigo" placeholder="fecha" type="date" required name="fecha_revision_presupuesto_primer_semestre" value="{{$t2->fecha_revision_presupuesto_primer_semestre}}"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="left" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Responsable revisión de presupuesto:</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Apellidos y NombreS</font></b></td>
		</tr>
	<tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>
		<select class="form-control" name="responsable_revision_presupuesto_primer_semestre" required>
			@foreach ($empleados as $empleado)
				@if ($t2->responsable_revision_presupuesto_primer_s->id == $empleado->id)
				
					<option value="{{$empleado -> id}}" selected>{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
				@else

					<option value="{{$empleado -> id}}">{{$empleado->nombres_apellidos}} - {{$empleado->cargos->cargo}}</option>

				@endif
			@endforeach
		</select>
		<br></font></b></td>
        
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=9 height="" align="left" valign=top bgcolor="#FFFFFF" sdnum="1033;0;General_)"><b><font face="Arial" size=2>ANALISIS PRIMER SEMESTRE</font></b></td>
		
	</tr>
	<tr>
        <td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=9 height="92" align="left" valign=top bgcolor="#FFFFFF" sdnum="1033;0;General_)"><b><font face="Arial" size=2><textarea class="campo" placeholder=""  name="analisis_revision_primer_semestre">{{$t2->analisis_revision_primer_semestre}}</textarea></font></b></td>
		
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 height="67" align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Fecha de revisión del presupuesto</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle sdnum="1033;0;General_)"><font face="Arial" size=2><input class="codigo" placeholder="fecha" type="date" required name="fecha_revision_presupuesto_segundo_semestre" value="{{$t2->fecha_revision_presupuesto_segundo_semestre}}"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Responsable revisión de presupuesto:</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>Apellidos y NombreS</font></b></td>
		
	</tr>
	<tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;0;General_)"><b><font face="Arial" size=2>
		<select class="form-control" name="responsable_revision_presupuesto_segundo_semestre" required>
			@foreach ($empleados as $empleado)
				@if ($t2->responsable_revision_presupuesto_segundo_s->id == $empleado->id)				
					<option value="{{$empleado -> id}}" selected>{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
				@else
					<option value="{{$empleado -> id}}">{{$empleado->nombres_apellidos}} - {{$empleado->cargos->cargo}}</option>
				@endif
			@endforeach
		</select>
		<br></font></b></td>
        
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=9 height="" align="left" valign=top bgcolor="#FFFFFF" sdnum="1033;0;General_)"><b><font face="Arial" size=2>ANALISIS SEGUNDO SEMESTRE</font></b></td>
		
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=9 height="92" align="left" valign=top bgcolor="#FFFFFF" sdnum="1033;0;General_)"><b><font face="Arial" size=2><textarea class="campo" placeholder=""  name="analisis_revision_segundo_semestre">{{$t2->analisis_revision_segundo_semestre}}</textarea></font></b></td>
		
	</tr>
</table>
<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
</form>
<script>
	function calcular_porcentaje(id) { 
        var presupuesto = document.getElementById('presupuesto_'+id).value;
        var ejecucion_primer_semestre = document.getElementById('ejecucion_primer_semestre_'+id).value;    
        if (presupuesto!="" && ejecucion_primer_semestre !=""){
            var acumulado = 0;
            if (ejecucion_primer_semestre > 0){
                acumulado = ejecucion_primer_semestre / presupuesto * 100
                result = document.getElementById('acumulado_uno_'+id);
            }          
            result.innerHTML = acumulado;
        }
    }

	function calcular_porcentaje2(id) { 
        var presupuesto = document.getElementById('presupuesto_'+id).value;
        var ejecucion_segundo_semestre = document.getElementById('ejecucion_segundo_semestre_'+id).value;    
        if (presupuesto!="" && ejecucion_segundo_semestre !=""){
            var acumulado = 0;
            if (ejecucion_segundo_semestre > 0){
                acumulado = ejecucion_segundo_semestre / presupuesto * 100
                result = document.getElementById('acumulado_dos_'+id);
            }          
            result.innerHTML = acumulado;
        }

		var semestre1 = document.getElementById('acumulado_uno_'+id).innerHTML;
		var semestre2 = document.getElementById('acumulado_dos_'+id).innerHTML;

		var acumulado_total = parseInt(semestre1) + parseInt(semestre2);

		document.getElementById('acumulado_total_'+id).innerHTML = acumulado_total;
    }
</script>
</body>
@endsection