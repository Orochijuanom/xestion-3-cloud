@extends('layouts.app')

@section('content')

<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
            <link href="/css/programa.css" rel="stylesheet" type="text/css"/><style>
          .thumb {
			  width: 70%;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial"; font-size:x-small }
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<a href="/cloud/form/l1">Inicio</a> / <a href="/cloud/form/t4/{{$t4->empresa_id}}">t4</a> / <a href="#">Agregar t4</a>
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
<form method="POST" action="/cloud/form/4/ver" width="4000px">
{{ csrf_field() }}
{{ method_field('PUT') }}
<table cellspacing="0" border="0">
	<colgroup width="46"></colgroup>
	<colgroup width="96"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="278"></colgroup>
	<colgroup span="2" width="164"></colgroup>
	<colgroup width="58"></colgroup>
	<colgroup width="135"></colgroup>
	<colgroup width="194"></colgroup>
	<colgroup width="107"></colgroup>
	<colgroup span="2" width="165"></colgroup>
	<colgroup width="157"></colgroup>
	<colgroup width="130"></colgroup>
	<colgroup width="153"></colgroup>
	<colgroup width="42"></colgroup>
	<colgroup width="43"></colgroup>
	<colgroup width="67"></colgroup>
	<colgroup width="109"></colgroup>
	<colgroup width="59"></colgroup>
	<colgroup width="87"></colgroup>
	<colgroup width="54"></colgroup>
	<colgroup width="122"></colgroup>
	<colgroup width="48"></colgroup>
	<colgroup width="113"></colgroup>
	<colgroup width="127"></colgroup>
	<colgroup width="85"></colgroup>
	<colgroup width="95"></colgroup>
	<colgroup width="128"></colgroup>
	<colgroup span="2" width="174"></colgroup>
	<colgroup width="141"></colgroup>
	<tr>
		<td height="75" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle><b>GTC 45: GUIA TECNICA COLOMBIANA <br>VERSION: 2012 - 06 -20 SEGUNDA ACTUALIZACION</b></td>
		<td align="left" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
		<td align="center" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" height="39" align="center" valign=middle><br></td>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=3 align="center" valign=middle><b><img style="width:200px; heigth:200px;" src="/images/{{$t4->empresa->logo}}" /><br />
			<output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 rowspan=2 align="center" valign=middle><b>{{$t4->empresa->nombre_empresa}}<input type="hidden" value="{{$t4->empresa->id}}" name="empresa_id" /><input type="hidden" value="{{$t4->id}}" name="id" /></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 align="center" valign=middle><b>3.1  Codigo: <input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" value="{{$t4->codigo}}" ></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="24" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 align="center" valign=middle><b>3.2 Fecha: <input class="codigo" placeholder="fecha" type="date" required name="fecha" value="{{$t4->fecha}}"  ></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="39" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 align="center" valign=middle><b>4. MATRIZ DE PELIGROS, EVALUACIÓN, VALORACIÓN DE RIESGOS Y DETERMINACIÓN DE CONTROLES </b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 align="center" valign=middle><b>3.3 Versión: <input class="codigo" placeholder="version" type="text" required name="version" value="{{$t4->version}}" ></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="19" align="center" valign=middle><br></td>
		<td style="border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=33 rowspan=2 align="center" valign=middle bgcolor="#50b308"><br></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="19" align="center" valign=middle><br></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="22" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=33 align="center" valign=middle bgcolor="#FFFFFF"><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="22" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Área / Proyecto:</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="area" >{{$t4->area}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Procesos:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="justify" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="procesos" >{{$t4->procesos}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Cargos asociados a la actividad:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 rowspan=2 align="justify" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="cargos_id" required>
			@foreach ($cargos as $cargo)
                @if($t4->cargos_id == $cargo->id)
                    <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                @else
                    <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                @endif
				
			@endforeach
		</select>
		<br></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="43" align="center" valign=middle><br></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="19" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=33 align="center" valign=middle bgcolor="#FFFFFF"><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="22" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Fecha de elaboración:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><input class="codigo" placeholder="fecha" type="date" required name="fecha_elaboracion" value="{{$t4->fecha_elaboracion}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Responsable elaboración y actualización:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="justify" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="responsable_elaboracion" required>
			@foreach ($empleados as $empleado)
                @if($t4->responsable_elaboracion == $empleado->id)
                    <option value="{{$empleado->id}}" selected>{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
                @else
                    <option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
                @endif
				
			@endforeach
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Fecha de Actualización:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 rowspan=2 align="justify" valign=middle bgcolor="#FFFFFF"><input class="codigo" placeholder="fecha" type="date" required name="fecha_actualizacion" value="{{$t4->fecha_actualizacion}}"><br></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="19" align="center" valign=middle><br></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="21" align="center" valign=middle><font size=3><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=35 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="50" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>Proceso</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>Zona / Lugar</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>Cargo</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>Actividad</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>Tarea</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>Rutinario Si /  No</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>Actividad  Propia o Contratada<br>P / C</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>Peligro</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Controles Existentes</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=middle bgcolor="#50b308"><b>Evaluación del riesgo</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Valoración del riesgo</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=middle bgcolor="#50b308"><b>Criterio para  establecer controles</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=6 align="center" valign=middle bgcolor="#50b308"><b>Medidas de intervención</b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="15" align="center" valign=middle><br></td>
		
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Nivel de deficiencia</b><button type="button" class="btn btn-default btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_def">?</button></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Nivel de  exposición</b><button type="button" class="btn btn-default btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_exp">?</button></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Nivel de probabilidad<br>(ND x NE)<br> </b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308">Interpretación del  nivel de probabilidad</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Nivel de  consecuencia</b><button type="button" class="btn btn-default btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_con">?</button></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Nivel de  riesgo (NR) e intervención<br>(NP x NC)</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Interpretación del NR</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Aceptabilida del riesgo</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Nro. Expuestos</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Riesgo Residual</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Existencia de requisito legal especifico asociado                 (Sí o No)</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Eliminación</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Sustitución</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Control de ingeniería</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Señalización,<br>Advertencia , Controles<br>Administrativos</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Equipos / elementos de<br>Protección Personal</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>Controles adicionales</b></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="45" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Fuente </b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Medio</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Charlas</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Capacitaciones</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Epps</b></td>	
		
		</tr>
		@foreach($t4->t4Detalles as $t4Detalle)
	<tr>
		<input type="hidden" name="t4detalle[]" value="{{$t4Detalle->id}}" />
		<td style="border-left: 1px solid #000000" height="40" align="center" valign=middle bgcolor="#FFFFFF"><br></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="proceso[]" >{{$t4Detalle->proceso}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="zona[]" >{{$t4Detalle->zona}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="cargo_id[]" required>
			@foreach ($cargos as $cargo)
                @if($t4Detalle->cargo_id == $cargo->id)
                    <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                @else
                    <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                @endif
				
			@endforeach
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="actividad[]" >{{$t4Detalle->actividad}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="tarea[]" >{{$t4Detalle->tarea}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="rutinario[]">
            <option value="s" @if($t4Detalle->rutinario == 's') selected @endif>Si</option>
			<option value="n" @if($t4Detalle->rutinario == 'n') selected @endif>No</option>
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="actividad_propia_contratada[]">
			<option value="p" @if($t4Detalle->actividad_propia_contratada == 'p') selected @endif>P</option>
			<option value="c" @if($t4Detalle->actividad_propia_contratada == 'c') selected @endif>C</option>
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" colspan=2 valign=middle bgcolor="#FFFFFF"><button type="button" class="btn btn-danger btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_cl_{{$loop->index}}">Clasificación</button></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="fuente[]" >{{$t4Detalle->fuente}}</textarea><br></td>		
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="medio[]" >{{$t4Detalle->medio}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><button type="button" class="btn btn-succes btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_ch_{{$loop->index}}">Charlas</button><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><button type="button" class="btn btn-info btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_ca_{{$loop->index}}">Capacitaciones</button><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><button type="button" class="btn btn-warning btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_ep_{{$loop->index}}">Epps</button><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" id="deficiencia_{{$loop->index}}" ondblclick="calcular_probabilidad({{$loop->index}})" onchange="calcular_probabilidad({{$loop->index}})" name="nivel_deficiencia[]" >{{$t4Detalle->nivel_deficiencia}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" id="exposicion_{{$loop->index}}" ondblclick="calcular_probabilidad({{$loop->index}})" onchange="calcular_probabilidad({{$loop->index}})" name="nivel_exposicion[]" >{{$t4Detalle->nivel_exposicion}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" id="probabilidad_{{$loop->index}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"id="interpretacion_probabilidad_{{$loop->index}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" id="consecuencia_{{$loop->index}}" ondblclick="calcular_riesgo({{$loop->index}})" onchange="calcular_riesgo({{$loop->index}})" name="nivel_consecuencia[]" >{{$t4Detalle->nivel_consecuencia}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" id="riesgo_{{$loop->index}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" id="interpretacion_riesgo_{{$loop->index}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="aceptabilidad_riesgo[]" >{{$t4Detalle->aceptabilidad_riesgo}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="numero_expuestos[]" >{{$t4Detalle->numero_expuestos}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="riesgo_residual[]" >{{$t4Detalle->riesgo_residual}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="existencia_requisito_legal[]">
			<option value="s" @if($t4Detalle->existencia_requisito_legal == 's') selected @endif>Si</option>
			<option value="n" @if($t4Detalle->existencia_requisito_legal == 'n') selected @endif>No</option>
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="eliminacion[]" >{{$t4Detalle->eliminacion}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="sustitucion[]" >{{$t4Detalle->sustitucion}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="control_ingenieria[]" >{{$t4Detalle->control_ingenieria}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="senalizacion[]" >{{$t4Detalle->senalizacion}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="equipos[]" >{{$t4Detalle->equipos}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="controles_adicionales[]" >{{$t4Detalle->controles_adicionales}}</textarea><br></td>
		</tr>
		@endforeach
	
</table>
@for($i=0; $i < 4; $i++)
<!-- Modal clasificacion de peligros -->
<div class="modal fade" id="modal_cl_{{$i}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Clasificación de peligros {{$i}}</h3>
			</div>
			<div class="modal-body">
			<a name="Arriba_{{$i}}">
			<a href="#Biologico_{{$i}}">Biologico</a> -
			<a href="#Fisico_{{$i}}">Fisico</a> -
			<a href="#Quimico_{{$i}}">Quimico</a> -
			<a href="#Condiciones de seguridad_{{$i}}">Condiciones de seguridad</a> -
			<a href="#Psicosocial_{{$i}}">Psicosocial</a> -
			<a href="#Biomecanico_{{$i}}">Biomecanico</a> -
			<a href="#Fenomenos naturales_{{$i}}">Fenomenos naturales</a> -
			<a href="#Actividades recreativas_{{$i}}">Actividades recreativas</a> -
				<table align="center" cellspacing="0" border="0">
				@foreach($riesgos as $riesgo)
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial"><a name="{{$riesgo->riesgo}}_{{$i}}"></a>{{$riesgo->riesgo}}<a href="#Arriba_{{$i}}"> - Volver Arriba</a></font></td>
					</tr>
					@foreach($riesgo->descripciones as $descripcion)
						<tr>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan={{count($descripcion->efectos) + 1}} align="center" valign=middle ><font face="Arial">{{$descripcion->descripcion}}</font></td>
							@foreach($descripcion->efectos as $efecto)
								<tr>

                                        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial">  
										
										<input type="checkbox" name="clasificacion[{{$i}}][]" value="{{$efecto->id}}"   
											@foreach($t4->t4Detalles[$i]->t4Clasificaciones as $clasificacion)  
												@if($clasificacion->descripcion_efecto_id == $efecto->id) checked 
												@endif @endforeach>{{$efecto->efecto->efecto}} />
										</font>
										</td>
								</tr>
							@endforeach
						</tr>
					@endforeach
					
				@endforeach	
					
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar()"data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal charlas-->
<div class="modal fade" id="modal_ca_{{$i}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Capacitaciones {{$i}}</h3>
			</div>
			<div class="modal-body">
				<table align="center" cellspacing="0" border="0">
				
				<tr>
					<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle bgcolor="#50b308"><font face="Arial">Charlas</font></td>
				</tr>
				@foreach($capacitaciones as $capacitacion)
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial">  <input type="checkbox" name="capacitacion[{{$i}}][]" value="{{$capacitacion->id}}" @foreach($t4->t4Detalles[$i]->t4Capacitaciones as $cap)  @if($cap->capacitaciones_id == $capacitacion->id) checked @endif @endforeach>{{$capacitacion->capacitacion}}</font></td>
					</tr>
				@endforeach
					
				
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar()"data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal capacitaciones -->
<div class="modal fade" id="modal_ch_{{$i}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Charlas {{$i}}</h3>
			</div>
			<div class="modal-body">
				<table align="center" cellspacing="0" border="0">
				
				<tr>
					<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle bgcolor="#50b308"><font face="Arial">Charlas</font></td>
				</tr>
				@foreach($charlas as $charla)
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial">  <input type="checkbox" name="charla[{{$i}}][]" value="{{$charla->id}}" @foreach($t4->t4Detalles[$i]->t4Charlas as $cha)  @if($cha->charlas_id == $charla->id) checked @endif @endforeach>{{$charla->charla}}</font></td>
					</tr>
				@endforeach
					
				
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar()"data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal epps -->
<div class="modal fade" id="modal_ep_{{$i}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Epps {{$i}}</h3>
			</div>
			<div class="modal-body">
				<table align="center" cellspacing="0" border="0">
				
				<tr>
					<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Epps</font></td>
				</tr>
				@foreach($zonas as $zona)
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan={{count($zona->epps) + 1}} align="center" valign=middle ><font face="Arial">{{$zona->zona}}</font></td>
						@foreach($zona->epps as $epp)
							<tr>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial">  <input type="checkbox" name="epps[{{$i}}][]" value="{{$epp->id}}" @foreach($t4->t4Detalles[$i]->t4Epps as $ele)  @if($ele->epps_id == $epp->id) checked @endif @endforeach>{{$epp->epp}}</font></td>
							</tr>
						@endforeach
					</tr>
				@endforeach
					
				
					
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar()"data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endfor
<!-- Modal def -->
<div class="modal fade" id="modal_def">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Nivel de Deficiencia</h3>
			</div>
			<div class="modal-body">
				<img style="width:500px; heigth:500px;" src="/images/def.png" />
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar()"data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal exp -->
<div class="modal fade" id="modal_exp">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Nivel de Exposicion</h3>
			</div>
			<div class="modal-body">
				<img style="width:500px; heigth:500px;" src="/images/exp.png" />
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar()"data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal con -->
<div class="modal fade" id="modal_con">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Nivel de Consecuencia</h3>
			</div>
			<div class="modal-body">
				<img style="width:500px; heigth:500px;" src="/images/cons.png" />
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar()"data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- ************************************************************************** -->
<hr>
<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
<!-- ************************************************************************** -->
<script>
	function calcular_probabilidad(id) { 
        var deficiencia = document.getElementById('deficiencia_'+id).value;
        var exposicion = document.getElementById('exposicion_'+id).value;    
        if (deficiencia!="" && exposicion !=""){
            var porcentaje = 0;
			var interpretacion = "";
            if (deficiencia > 0 && exposicion > 0){
                porcentaje = deficiencia * exposicion;
				if(porcentaje >= 2 && porcentaje <= 4){
					interpretacion = 'BAJO';
				}else if(porcentaje >= 5 && porcentaje <= 8){
					interpretacion = 'MEDIO';
				}else if(porcentaje >= 9 && porcentaje <= 20){
					interpretacion = 'ALTO';
				}else if(porcentaje > 21){
					interpretacion = 'MUY ALTO';
				}
                probabilidad = document.getElementById('probabilidad_'+id);
                interpretacion_probabilidad = document.getElementById('interpretacion_probabilidad_'+id);
            }          
            probabilidad.innerHTML = porcentaje;
			interpretacion_probabilidad.innerHTML = interpretacion; 
        }
    }

function calcular_riesgo(id) { 
	var probabilidad = document.getElementById('probabilidad_'+id).innerHTML;
	var consecuencia = document.getElementById('consecuencia_'+id).value;    
	if (probabilidad !="" && consecuencia !=""){
		var riesgo = 0;
		var interpretacion = "";
		if (probabilidad > 0 && consecuencia > 0){
			riesgo = probabilidad * consecuencia;
			if(riesgo >= 0 && riesgo <= 20){
				interpretacion = 'IV';
			}else if(riesgo >= 21 && riesgo <= 100){
				interpretacion = 'III';
			}else if(riesgo >= 101 && riesgo <= 500){
				interpretacion = 'II';
			}else if(riesgo > 501){
				interpretacion = 'I';
			}
			riesgo_campo = document.getElementById('riesgo_'+id);
			interpretacion_riesgo = document.getElementById('interpretacion_riesgo_'+id);
		}          
		riesgo_campo.innerHTML = riesgo;
		interpretacion_riesgo.innerHTML = interpretacion; 
	}
}
</script>
</body>
@endsection