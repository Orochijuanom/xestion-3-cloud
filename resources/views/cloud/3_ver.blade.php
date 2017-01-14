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
	<title></title>

	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
	</style>
	
</head>

<body>
<a href="/cloud/form/l1">Inicio</a> / <a href="/cloud/form/t1/{{$t3->empresa->id}}">t3</a> / <a href="#">Ver editar t3</a>
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

<form method="POST" action="{{ url('/cloud/form/3/ver') }}">
{{ csrf_field() }}
{{ method_field('PUT') }}
<table align="left" cellspacing="0" border="0">
	<colgroup width="215"></colgroup>
	<colgroup width="137"></colgroup>
	<colgroup width="117"></colgroup>
	<colgroup width="107"></colgroup>
	<colgroup width="331"></colgroup>
	<colgroup width="196"></colgroup>
	<colgroup width="120"></colgroup>
	<colgroup width="106"></colgroup>
	<colgroup width="131"></colgroup>
	<colgroup width="261"></colgroup>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=3 height="61" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><img style="width:200px; heigth:200px;" src="/images/{{$t3->empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3><b>{{$t3->empresa->nombre_empresa}} 
		<input type="hidden" value="{{$t3->empresa->id}}" name="empresa_id" />
		<input type="hidden" value="{{$t3->id}}" name="id" />
		</b></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">Código:<input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" value="{{$t3->codigo}}"/>  </font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">Versión:<input class="codigo" placeholder="version" type="text" required name="version" value="{{$t3->version}}"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3>MATRIZ DE  REQUISITOS LEGALES Y DE OTRA INDOLE APLICABLES A LA EMPRESA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"> Fecha:<input class="codigo" placeholder="fecha" type="date" required name="fecha" value="{{$t3->fecha}}"> </font></b></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=11 height="20" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 height="41" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3>Fecha de actualización</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3>Motivo actualización</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3>Responsable de elaboración y/o actualización</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3>Revisado por</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3><input class="campo" placeholder="fecha" type="date" required name="fecha_actualizacion" value="{{$t3->fecha_actualizacion}}"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3><textarea class="campo" placeholder=""  name="motivo_actualizacion">{{$t3->motivo_actualizacion}}</textarea><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3>
		<select id="cargo" class="form-control" name="responsable_actualizacion" required>
			@foreach ($empleados as $empleado)
				<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
			@endforeach
		</select>
		<br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3>
		<select id="cargo" class="form-control" name="revisado_por" required>
			@foreach ($empleados as $empleado)				
				<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>					
			@endforeach
		</select>
		<br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=11 height="19" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Arial"><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 height="39" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;@"><b><font face="Arial">NORMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="39" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;@"><b><font face="Arial">NÚMERO NORMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">FECHA DE PUBLICACIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">EMISOR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">ARTICULO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">DESCRIPCIÓN DE LA OBLIGACIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">PALABRA CLAVE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">APLICA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">CUMPLE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">COMO SE CUMPLE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">RESPONSABLE DEL CUMPLIMIENTO</font></b></td>
	</tr>
	<tr>
	</tr>
	@foreach($t3->detalles as $t3)
	<tr>
		<input type="hidden" name="t3Detalle[]" value="{{$t3->id}}" />
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="37" align="left" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="norma[]">{{$t3->norma}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="37" align="left" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="numero_norma[]">{{$t3->numero_norma}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><input class="campo" placeholder="fecha" type="date" required name="fecha_publicacion[]" value="{{$t3->fecha_publicacion}}"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="emisor[]">{{$t3->emisor}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="articulo[]">{{$t3->articulo}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify"><font face="Arial"><textarea class="campo" placeholder=""  name="descripcion_obligacion[]">{{$t3->descripcion_obligacion}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify"><font face="Arial"><textarea class="campo" placeholder=""  name="palabra_clave[]">{{$t3->palabra_clave}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font >
		<select id="aplica_{{$t3->id}}" style="background:green;" name="aplica[]" onchange="cambiar_color(this.id)">
			<option value="1"@if($t3->aplica == 1) selected @endif>1</option>
			<option value="0" @if($t3->aplica == 0) selected @endif>0</option>
		</select>
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font >
		<select id="cumple_{{$t3->id}}" name="cumple[]" style="background:green;" onchange="cambiar_color(this.id)">
			<option value="1" @if($t3->aplica == 1) selected @endif>1</option>
			<option value="0" @if($t3->aplica == 0) selected @endif>0</option>
		</select>
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="como_cumple[]">{{$t3->como_cumple}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><font face="Arial">
		<select id="cargo" class="form-control" name="responsable_cumplimiento[]" required>
			@foreach ($empleados as $empleado)
			@if ($t3->responsable_cumplimiento == $empleado->id)
				
					<option value="{{$empleado -> id}}" selected>{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
				@else

					<option value="{{$empleado -> id}}">{{$empleado->nombres_apellidos}} - {{$empleado->cargos->cargo}}</option>

				@endif
				
			@endforeach
		</select>
		<br></font></td>
	</tr>
	@endforeach
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="39" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;@"><b><font face="Arial">EVALUACION DE CUMPLIMIENTO PRIMER SEMESTRE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="left" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="evaluacion_cumplimiento_primer_semestre">{{$t3->evaluacion_cumplimiento_primer_semestre}}</textarea><br></font></td>
	</tr>

	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000"  height="39" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;@"><b><font face="Arial">EVALUACION DE CUMPLIMIENTO SEGUNDO SEMESTRE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="left" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="evaluacion_cumplimiento_segundo_semestre">{{$t3->evaluacion_cumplimiento_segundo_semestre}}</textarea><br></font></td>
	</tr>

</table>
	<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
</form>
<script>
	function cambiar_color(combo)
	{
		var c = document.getElementById(combo);
		if (c.value==1)
			c.style.background = "green";
		else
			c.style.background = "red";
		
		console.log(c);
	}
</script>

<!-- ************************************************************************** -->
 
</body>
@endsection