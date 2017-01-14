@extends('layouts.app')

@section('content')

<head>
		            <link href="/css/programa.css" rel="stylesheet" type="text/css"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Empleados</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		input[type="text"]{text-align: left}
	</style>
	
</head>

<body>
<a href="/cloud/form/l1">Inicio</a> / <a href="/cloud/form/t13/{{$empresa->id}}">Empleados</a> / <a href="#">Agregar Empleado</a>
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
<form method="POST" action="{{ url('/cloud/form/13') }}">
{{ csrf_field() }}

<table cellspacing="0" border="0">
	<colgroup width="79"></colgroup>
	<colgroup width="222"></colgroup>
	<colgroup width="79"></colgroup>
	<colgroup width="120"></colgroup>
	<colgroup span="2" width="237"></colgroup>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=3 height="84" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 rowspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><input type="hidden" value="{{$empresa->id}}" name="empresa_id" /></font></b></td>
		
		</tr>
	<tr>
		<td  height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
		
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="20" align="left" valign=middle bgcolor="#50b308"><b><font color="#000000">EMPRESA</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#50b308"><font color="#000000">{{$empresa->nombre_empresa}}<input type="hidden" name="empresa_id" value="{{$empresa->id}}"></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	
	<tr>
		<td height="21" align="left" valign=middle><b><font color="#000000"><br></font></b></td>
		<td align="left" valign=middle><b><font color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=6 height="21" align="left" valign=middle bgcolor="#50b308"><b><font color="#000000">FICHA DATOS DE PERSONAL</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="22" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Nombres y Apellidos:</font></b></td>
		<td style="border-top: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle bgcolor="#ffffff"><font color="#000000"><input  placeholder="Nombre" type="text" required name="nombre_apellidos"><br></font></td>
		<td style="border-top: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#50b308"><b><font color="#000000">Elemento</font></b></td>
		<td style="border-top: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#50b308"><b><font color="#000000">Talla</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="22" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Numero de cedula / ID</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Cedula" type="text" required name="cedula"></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Talla de pantalon</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Talla" type="text" required name="talla_pantalon"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="22" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Fecha de Nacimiento:</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font color="#000000"><br><input  placeholder="fecha" type="date" required name="fecha_nacimiento"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#50b308"><b><font color="#000000">Talla de overol</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Talla" type="text" required name="talla_overol"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Fecha Ingreso a la empresa:</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font color="#000000"><br><input  placeholder="fecha" type="date" required name="fecha_ingreso_empresa"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Talla de calzado</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Talla" type="text" required name="talla_calzado"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Genero</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br>
		<select class="estado" name="sexo">
   			<option value="1">hombre</option> 
   			<option value="2">mujer</option> 
   			<option value="3">otro</option>
		</select>
		</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Talla de  camisa</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Talla" type="text" required name="talla_camisa"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Edad</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input class="numeros" type="number" name="edad"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Talla de  guante (s)</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Talla" type="text" required name="talla_guante"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Estado civil</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font>
		<select class="estado" name="estado_civil">
			<option value="1">soltero</option> 
			<option value="2">casado</option> 
			<option value="3">separado</option>
			<option value="4">viudo</option> 
		</select>
		</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Talla impermeable</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Talla" type="text" required name="talla_impermeable"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="20" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Numero de hijos</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input class="numeros" type="number" name="n_hijos" placeholder="Número hijos"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="20" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Dirección de la vivienda</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;#,##0"><b><font color="#000000"><br><textarea class="campo" placeholder=""  name="direccion_vivienda"></textarea></font></b></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Fecha de Inducción</font></b></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font color="#FF0000"><br><input  placeholder="fecha" type="date" required name="fecha_induccion"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Ciudad</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><input  placeholder="Ciudad" type="text" required name="ciudad"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Fecha para Re-Inducción</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font color="#FF0000"><br><input  placeholder="fecha" type="date" required name="fecha_reinducion"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Cargo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF">
		<b>
			<select id="cargo" class="form-control" name="cargo">
				@foreach ($cargos as $cargo)
					<option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
				@endforeach
			</select>
		<font color="#000000"><br></font></b>
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Fecha último examen ocupacional</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font color="#FF0000"><br><input  placeholder="fecha" type="date" required name="fecha_ultimo_examen_ocupacional"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Experiencia en Años</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><input  placeholder="Experiencia" type="text"  name="experiencia"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Fecha proximo examen ocupacional</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="fecha" type="date" required name="fecha_proximo_examen_ocupacional"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Profesión</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;#,##0"><b><font color="#000000"><input  placeholder="Profesion" type="text" required name="profesion"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Apto medicamente</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br>
		<select class="estado" name="apto_medicamente">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Email</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><u><font color="#0563C1"><br><input type="text" id="mail1" name="email" placeholder="* Correo electr&oacute;nico"  required/></font></u></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Concepto para Trabajo en Alturas</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000"><br>
		<select class="estado" name="concepto_trabaja_alturas">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="39" align="left" valign=middle bgcolor="#50b308"><b><font color="#000000">Jefe inmediato</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><u><font color="#0563C1"><br><input  placeholder="Jefe inmediato" type="text" name="jefe_inmediato"></font></u></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=bottom bgcolor="#50b308"><b><font color="#000000">Concepto para Trabajo en Espacio Confinado</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000"><br>
		<select class="estado" name="concepto_trabaja_espacio_confinado">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="39" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Area a la que pertenece</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;#,##0"><b><font color="#000000"><br><input  placeholder="Area" type="text" required name="area_pertenece"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=bottom bgcolor="#50b308"><b><font color="#000000">Registro de entrega de EPP y dotación</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000"><br>
		<select class="estado" name="registro_entrega_dotacion">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="20" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Lugar del Centro de trabajo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><u><font color="#0563C1"><br><input  placeholder="Lugar" type="text" required name="lugar_centro_trabajo"></font></u></b></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=middle bgcolor="#50b308"><b><font color="#000000">Numero de licencia de conducción</font></b></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="#l construccion" type="text"  name="n_licencia_conduccion"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="20" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Horario de Trabajo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br>
		<select class="estado" name="horario_trabajo">
			<option value="1">8 horas</option> 
			<option value="2">12 horas</option> 
			<option value="3">24 horas</option>
		</select>
		</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=5 align="left" valign=middle bgcolor="#50b308"><b><font color="#000000">Registro de Vacunas según Cargo</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">Tetanos (TD)
		<select class="estado" name="tetano">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">EPS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br>	
		<select class="estado" name="eps">
			<option value="1">cafesalud</option> 
			<option value="2">saludtotal</option> 
			<option value="3">nueva eps</option>
		</select>
		</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">Fiebre Amarilla
		<select class="estado" name="fiebre_amarilla">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">ARL</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br>	
		<select class="estado" name="arl">
   			<option value="1">sura</option> 
   		    <option value="2">positiva</option> 
   			<option value="3">colpatria</option>
		</select>
		</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">Hepatitis B
		<select class="estado" name="hepatitis">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font>
	</b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">AFP</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br>	
		<select class="estado" name="afp">
			<option value="1">proteccion</option> 
			<option value="2">porvenir</option> 
			<option value="3">colfondos</option>
		</select>
		</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">Antirrabica
		<select class="estado" name="antirrabica">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="20" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Caja de compensación</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br>	
		<select class="estado" name="caja_compensacion">
   			<option value="1">cafam</option> 
   			<option value="2">compensar</option> 
   			<option value="3">colsubsidio</option>
		</select>
		</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">Otra
		<select class="estado" name="otra">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="20" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Grupo sanguineo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br>	
		<select class="estado" name="grupo_sanguineo">
			<option value="1">O-</option> 
			<option value="2">O+</option> 
			<option value="3">A-</option>
			<option value="4">A+</option> 
			<option value="5">B-</option> 
			<option value="6">B+</option>
			<option value="7">AB-</option> 
			<option value="8">AB+</option> 
		</select>
		</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=7 align="justify" valign=middle bgcolor="#50b308"><b><font color="#000000">Capacitaciones al cargo</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Persona de contacto en caso de emergencia</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Nombre" type="text" required name="persona_contacto"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">SST
		<select class="estado" name="sst">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Telefono del contacto</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Telefono" type="text" required name="tel_contacto"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">Ambiente
		<select class="estado" name="ambiente">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Dirección del contacto</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Direccion" type="text" required name="dir_contacto"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">Tecnicas
		<select class="estado" name="tecnicas">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Sueldo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Sueldo" type="text" required name="sueldo"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">Calidad
		<select class="estado" name="calidad">
   			<option value="1">Si</option> 
   			<option value="2">No</option> 
		</select>
		</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="19" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Numero de Cuenta Bancaria: </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="#cuenta" type="text" required name="n_cuenta"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="20" align="left" valign=bottom bgcolor="#50b308"><b><font color="#000000">Banco</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br><input  placeholder="Banco" type="text" required name="banco"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
	</tr>
</table>
<div class="sign-up"><input type="submit" value="Nuevo"/></div>
<div class="sign-up"><input type="submit" value="Guardar"/></div>
<div class="sign-up"><input type="submit" value="Editar"/></div>
<div class="sign-up"><input type="submit" value="Eliminar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
</form>
</body>
@endsection