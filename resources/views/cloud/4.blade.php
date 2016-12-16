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
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<form method="POST" action="{{ url('/cloud/form/4') }}">
{{ csrf_field() }}
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
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=3 align="center" valign=middle><b><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" /><br />
			<output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 rowspan=2 align="center" valign=middle><b>{{$empresa->nombre_empresa}}<input type="hidden" value="{{$empresa->id}}" name="empresa_id" /></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 align="center" valign=middle><b>3.1  Codigo: <input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" ></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="24" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 align="center" valign=middle><b>3.2 Fecha: <input class="codigo" placeholder="fecha" type="date" required name="fecha" ></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="39" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 align="center" valign=middle><b>4. MATRIZ DE PELIGROS, EVALUACIÓN, VALORACIÓN DE RIESGOS Y DETERMINACIÓN DE CONTROLES </b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 align="center" valign=middle><b>3.3 Versión: <input class="codigo" placeholder="version" type="text" required name="version"></b></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>5.1 Área / Proyecto:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="area" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>5.2 Procesos:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="justify" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="procesos" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>5.3 Cargos asociados a la actividad:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 rowspan=2 align="justify" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="cargo_id">
			@foreach ($cargos as $cargo)
				<option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
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
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>5.4 Fecha de elaboración:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><input class="codigo" placeholder="fecha" type="date" required name="fecha_elaboracion" value="{{ date('Y-m-d') }}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>5.5 Responsable elaboración y actualización:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="justify" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="responsable_elaboracion">
			@foreach ($empleados as $empleado)
				<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
			@endforeach
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>5.6 Fecha de Actualización:</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=4 rowspan=2 align="justify" valign=middle bgcolor="#FFFFFF"><input class="codigo" placeholder="fecha" type="date" required name="fecha_actualizacion" value="{{ date('Y-m-d') }}"><br></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>6.2 Zona / Lugar</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>6.3 Cargo</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>6.4 Actividad</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>6.5 Tarea</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>6.6 Rutinario Si /  No</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>6.7 Actividad  Propia o Contratada<br>P / C</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=3 align="center" valign=middle bgcolor="#50b308"><b>6.11 Peligro</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.13 Controles Existentes</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=middle bgcolor="#50b308"><b>6,17 Evaluación del riesgo</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>6,26 Valoración del riesgo</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=middle bgcolor="#50b308"><b>6,28 Criterio para  establecer controles</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=6 align="center" valign=middle bgcolor="#50b308"><b>6.37 Medidas de intervención</b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="15" align="center" valign=middle><br></td>
		
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.18 Nivel de deficiencia</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.19 Nivel de  exposición</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.20 Nivel de probabilidad<br>(ND x NE)<br> </b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308">6.21 Interpretación del  nivel de probabilidad</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.22 Nivel de  consecuencia</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.23 Nivel de  riesgo (NR) e intervención<br>(NP x NC)</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.24 Interpretación del NR</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.25 Aceptabilida del riesgo</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6. 27 Nro. Expuestos</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.29 Riesgo Residual</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.30 Existencia de requisito legal especifico asociado                 (Sí o No)</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.31 Eliminación</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.32 Sustitución</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.33 Control de ingeniería</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.34  Señalización,<br>Advertencia , Controles<br>Administrativos</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.35 Equipos / elementos de<br>Protección Personal</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b>6.36 Controles adicionales</b></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000" height="45" align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>6.14 Fuente </b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>6.15 Medio</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Charlas</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Capacitaciones</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>Epps</b></td>	
		
		</tr>
		@for($i=0; $i < 11; $i++)
	<tr>
		<td style="border-left: 1px solid #000000" height="40" align="center" valign=middle bgcolor="#FFFFFF"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="proceso[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="zona[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="cargo_id[]">
			@foreach ($cargos as $cargo)
				<option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
			@endforeach
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="actividad[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="tarea[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="rutinario[]">
			<option value="s">Si</option>
			<option value="n">No</option>
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="actividad_propia_contratada[]">
			<option value="p">P</option>
			<option value="c">C</option>
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" colspan=2 valign=middle bgcolor="#FFFFFF"><button type="button" class="btn btn-danger btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_cl_{{$i}}">Clasificación</button></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="fuente[]" ></textarea><br></td>		
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="medio[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><button type="button" class="btn btn-succes btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_ch_{{$i}}">Charlas</button><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><button type="button" class="btn btn-info btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_ca_{{$i}}">Capacitaciones</button><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><button type="button" class="btn btn-warning btn-block btn-xs" id="modalbtn" data-toggle="modal" data-target="#modal_ep_{{$i}}">Epps</button><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" id="deficiencia_{{$i}}" onchange="calcular_probabilidad({{$i}})" name="nivel_deficiencia[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" id="exposicion_{{$i}}" onchange="calcular_probabilidad({{$i}})" name="nivel_exposicion[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" id="probabilidad_{{$i}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"id="interpretacion_probabilidad_{{$i}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" id="consecuencia_{{$i}}" onchange="calcular_riesgo({{$i}})" name="nivel_consecuencia[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" id="riesgo_{{$i}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" id="interpretacion_riesgo_{{$i}}"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="aceptabilidad_riesgo[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="numero_expuestos[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="riesgo_residual[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=middle bgcolor="#FFFFFF">
		<select id="cargo" class="form-control" name="existencia_requisito_legal[]">
			<option value="s">Si</option>
			<option value="n">No</option>
		</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="eliminacion[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="sustitucion[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="control_ingenieria[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="sealizacion[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="equipos[]" ></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder="" name="controles_adicionales[]" ></textarea><br></td>
		</tr>
		@endfor
	
</table>
@for($i=0; $i < 11; $i++)
<!-- Modal clasificacion de peligros -->
<div class="modal fade" id="modal_cl_{{$i}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">Clasificación de peligros {{$i}}</h3>
			</div>
			<div class="modal-body">
				<table align="center" cellspacing="0" border="0">
				@foreach($riesgos as $riesgo)
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">{{$riesgo->riesgo}}</font></td>
					</tr>
					@foreach($riesgo->descripciones as $descripcion)
						<tr>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan={{count($descripcion->efectos) + 1}} align="center" valign=middle ><font face="Arial">{{$descripcion->descripcion}}</font></td>
							@foreach($descripcion->efectos as $efecto)
								<tr>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial">  <input type="checkbox" name="clasificacion[{{$i}}][]" value="{{$efecto->id}}">{{$efecto->efecto->efecto}}</font></td>
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
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial">  <input type="checkbox" name="capacitacion[{{$i}}][]" value="{{$capacitacion->id}}">{{$capacitacion->capacitacion}}</font></td>
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
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial">  <input type="checkbox" name="charla[{{$i}}][]" value="{{$charla->id}}">{{$charla->charla}}</font></td>
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
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial">  <input type="checkbox" name="epps[{{$i}}][]" value="{{$epp->id}}">{{$epp->epp}}</font></td>
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
<!-- ************************************************************************** -->
<hr>
<div class="sign-up"><input type="submit" value="Nuevo"/></div>
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
