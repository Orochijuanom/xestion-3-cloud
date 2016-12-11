<head>
	            <link href="/css/programa.css" rel="stylesheet" type="text/css"/>
		            <style>
          .thumb {
            height: 70px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
	</style>
	
</head>

<body>
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
<form method="POST" action="{{ url('/cloud/form/11') }}">
{{ csrf_field() }}
<table align="left" cellspacing="0" border="0">
	<colgroup width="98"></colgroup>
	<colgroup width="102"></colgroup>
	<colgroup width="98"></colgroup>
	<colgroup width="102"></colgroup>
	<colgroup width="117"></colgroup>
	<colgroup width="81"></colgroup>
	<colgroup width="106"></colgroup>
	<colgroup span="3" width="81"></colgroup>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=3 height="84" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">{{$empresa->nombre_empresa}}<input type="hidden" value="{{$empresa->id}}" name="empresa_id" /></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">Código:<input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" ></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">Versión: <input class="codigo" placeholder="version" type="text" required name="version"></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"> FICHA TECNICA DE  INDICADORES </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">Fecha: <input class="codigo" placeholder="fecha" type="date" required name="fecha"></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=10 height="20" align="center" valign=middle><b><font face="Arial"><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="43" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Fecha creación del indicador</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font face="Arial"><input class="codigo" placeholder="fecha" type="date" required name="fecha_creacion_indicador"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle bgcolor="#50b308" sdnum="1033;1033;M/D/YYYY"><b><font face="Arial">Ficha Numero</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;@"><font face="Arial"><textarea class="campo" placeholder=""  name="ficha_numero"></textarea><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="43" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Nombre del indicador</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font face="Arial"><textarea class="campo" placeholder=""  name="nombre_indicador"></textarea><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="43" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Definición del indicador</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font face="Arial"><textarea class="campo" placeholder=""  name="definicion_indicador"></textarea><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="43" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Meta</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font face="Arial"><textarea class="campo" placeholder=""  name="meta"></textarea><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="43" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Responsable del calculo y seguimiento del indicador</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font face="Arial">
		<select name="responsable_calculo_seguimiento">
			<option value="-1">Seleccione</option>
			@foreach($empleados as $empleado)
				<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}}</option>
			@endforeach
		</select>
		<br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="43" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Tipo de indicador</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font face="Arial"><textarea class="campo" placeholder=""  name="tipo_indicador"></textarea><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=10 height="27" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">FUENTE Y FRECUENCIA MEDICION DEL INDICADOR</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 height="86" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Método de calculo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 rowspan=2 align="left" valign=middle bgcolor="#FFFFFF"><font face="Arial">
		<select id="metodo_calculo" class="form-control" name="metodo_calculo" onchange="modal()">
			<option value="1">Cero Accidentes</option>
			<option value="2">(Nro actividades ejecutadas/ Nro actividades programadas)*100</option>
			<option value="3">(Sumatoria de puntaje obtenido / sumatoria puntaje posible)/100</option>
		</select>
		<br></font></td>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="43" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Frecuencia de  medición y reporte</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><font face="Arial">
		<select id="frecuencia_medicion_reporte" class="form-control" name="frecuencia_medicion_reporte" onchange="modal()">
			<option value="1">Anual</option>
			<option value="2">Semestral</option>
			<option value="4">Trimestral</option>
		</select>
		
		
		
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">Escala</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle><font face="Arial">Porcentaje</font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="60" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Fuente de  datos para el calculo del indicador</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="fuente_datos_calculo"/></textarea><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 height="43" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">Interpretación</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder="" name="interpretacion"></textarea><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=10 height="19" align="center" bgcolor="#50b308"><b><font face="Arial">GRAFICA</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=15 height="291" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=15 align="center" valign=middle><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" rowspan=15 align="center" valign=middle bgcolor="#50b308"><font face="Arial"><br></font></td>
	</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	

	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=10 height="28" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial"><button type="button" class="btn btn-success btn-block btn-lg" id="modalbtn" data-toggle="modal" data-target="#modal1-1">RESULTADOS</button></font></b></td>
	</tr>
	
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 height="46" align="justify" valign=middle><b><font face="Arial">7. Personas que deben conocer el indicador</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=8 align="left" valign=middle><font color="#000000">Gerencia General, Responsable del SG-SST y Vigía de Seguridad y Salud en el Trabajo</font></td>
		</tr>
</table>

<!-- Modal 2-1 -->
<div class="modal fade" id="modal2-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Resultados</h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Resultado %</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">ACTIVIDADES EJECUTADAS</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">ACTIVIDADES PROGRAMADAS</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Análisis</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Acciones de mejora</font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">Anual</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[2][1][]"></textarea></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[2][1][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[2][1][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[2][1][0]"></textarea><br></font></td>
					</tr>
					
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal 2-2 -->
<div class="modal fade" id="modal2-2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Resultados</h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Resultado %</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">ACTIVIDADES EJECUTADAS</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">ACTIVIDADES PROGRAMADAS</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Análisis</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Acciones de mejora</font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">1er Semestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[2][2][]"></textarea></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[2][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[2][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[2][2][]"></textarea><br></font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">2do Semestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[2][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[2][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[2][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[2][2][]"></textarea><br></font></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal 2-4 -->
<div class="modal fade" id="modal2-4">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Resultados</h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Resultado %</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">ACTIVIDADES EJECUTADAS</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">ACTIVIDADES PROGRAMADAS</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Análisis</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Acciones de mejora</font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">1er Trimestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[2][4][]"></textarea></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[2][4][]"></textarea><br></font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">2do Trimestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[2][4][]"></textarea><br></font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">3er Trimestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[2][4][]"></textarea></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[2][4][]"></textarea><br></font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">4to Trimestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[2][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[2][4][]"></textarea><br></font></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal 3-1 -->
<div class="modal fade" id="modal3-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Resultados</h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Resultado %</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">PUNTAJE OBTENIDO</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">PUNTAJE POSIBLE</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Análisis</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Acciones de mejora</font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">Anual</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[3][1][]"></textarea></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[3][1][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[3][1][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[3][1][]"></textarea><br></font></td>
					</tr>
					
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal 3-2 -->
<div class="modal fade" id="modal3-2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Resultados</h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Resultado %</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">PUNTAJE OBTENIDO</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">PUNTAJE POSIBLE</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Análisis</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Acciones de mejora</font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">1er Semestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[3][2][]"></textarea></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[3][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[3][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[3][2][]"></textarea><br></font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">2do Semestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[3][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[3][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[3][2][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[3][2][]"></textarea><br></font></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal 3-4 -->
<div class="modal fade" id="modal3-4">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Resultados</h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Resultado %</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">PUNTAJE OBTENIDO</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">PUNTAJE POSIBLE</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Análisis</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Acciones de mejora</font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">1er Trimestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[3][4][]"></textarea></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[3][4][]"></textarea><br></font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">2do Trimestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones[3][4][]"></textarea><br></font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">3er Trimestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[3][4][]"></textarea></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[3][4][]"></textarea><br></font></td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">4to Trimestre</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><font face="Arial">#DIV/0!</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor1[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="valor2[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="analisis[3][4][]"></textarea><br></font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="acciones_mejora[3][4][]"></textarea><br></font></td>
					</tr>
				</table>
			</div>
			<br>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
</form>
<script>
	function modal(){
		var metodo = document.getElementById('metodo_calculo').value;
		var frecuencia = document.getElementById('frecuencia_medicion_reporte').value;
		
		var modalbtn = document.getElementById("modalbtn");
		var target;
		if(metodo == 1){
			if(frecuencia == 1){
				target = "1-1";
			}else if(frecuencia == 2){
				target = "1-2";
			}else if(frecuencia == 4){
				target = "1-4";
			}
		}else if(metodo == 2){
			if(frecuencia == 1){
				target = "2-1";
			}else if(frecuencia == 2){
				target = "2-2";
			}else if(frecuencia == 4){
				target = "2-4";
			}
		}else if(metodo == 3){
			if(frecuencia == 1){
				target = "3-1";
			}else if(frecuencia == 2){
				target = "3-2";
			}else if(frecuencia == 4){
				target = "3-4";
			}
		}

		modalbtn.setAttribute('data-target', '#modal'+target);
	}
</script>
</body>
