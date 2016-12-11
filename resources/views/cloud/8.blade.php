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
<form method="POST" action="{{ url('/cloud/form/8') }}">
{{ csrf_field() }}

<table cellspacing="0" border="0">
	<colgroup width="19"></colgroup>
	<colgroup width="57"></colgroup>
	<colgroup width="167"></colgroup>
	<colgroup width="88"></colgroup>
	<colgroup width="112"></colgroup>
	<colgroup width="133"></colgroup>
	<colgroup width="72"></colgroup>
	<colgroup width="96"></colgroup>
	<colgroup width="79"></colgroup>
	<colgroup width="95"></colgroup>
	<colgroup width="81"></colgroup>
	<colgroup width="68"></colgroup>
	<colgroup width="74"></colgroup>
	<colgroup width="113"></colgroup>
	<colgroup width="53"></colgroup>
	<colgroup width="106"></colgroup>
	<colgroup width="101"></colgroup>
	<colgroup span="2" width="96"></colgroup>
	<colgroup span="3" width="128"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="72"></colgroup>
	<colgroup width="80"></colgroup>
	<colgroup width="60"></colgroup>
	<colgroup width="71"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="105"></colgroup>
	<colgroup width="66"></colgroup>
	<colgroup width="93"></colgroup>
	<colgroup width="95"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="114"></colgroup>
	<colgroup width="132"></colgroup>
	<colgroup width="91"></colgroup>
	<colgroup width="112"></colgroup>
	<colgroup width="123"></colgroup>
	<colgroup width="131"></colgroup>
	<colgroup width="19"></colgroup>
	<colgroup span="10" width="85"></colgroup>
	<tr>
		<td height="33" align="left"><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 rowspan=3 align="left" valign=middle><b><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=32 rowspan=2 align="center" valign=middle><b><font face="Arial" size=3>{{$empresa->nombre_empresa}}<input type="hidden" value="{{$empresa->id}}" name="empresa_id" /></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">3.1 Código:<input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo"></font></b></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="33" align="left"><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">3.2 Versión:<input class="codigo" placeholder="version" type="text" required name="version"></font></b></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="33" align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=32 align="center" valign=middle><b><font face="Arial" size=3>4. MATRIZ EXAMENES MEDICOS OCUPACIONALES</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font face="Arial">3.3 Fecha:<input class="codigo" placeholder="fecha" type="date" required name="fecha"></font></b></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="27" align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=36 align="center" valign=top><b><font face="Arial"><br></font></b></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="22" align="left"><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">Datos </font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" color="#000000">Resultado de Examen de énfasis en  Evaluación Médica</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" color="#000000">7. Pruebas Complementarias</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" color="#000000">Laboratorios</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" color="#000000"> Vacunas</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=6 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" color="#000000">Observaciones</font></b></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
		<td align="left"><font face="Arial" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="90" align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#50b308"><b><font face="Arial">No.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">  Apellidos y nombres</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial"> Centro de trabajo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">Tipo de examen</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial"> Fecha de examen</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC00"><b><font face="Arial" color="#000000">Musculo esquelético </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC00"><b><font face="Arial" color="#000000">Dermatológico</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC00"><b><font face="Arial" color="#000000">Respiratorio</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC00"><b><font face="Arial" color="#000000"> Cardio Vascular </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC00"><b><font face="Arial" color="#000000">Trabajo en alturas</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC00"><b><font face="Arial" color="#000000">Test de fobias (trabajo en alturas)</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC00"><b><font face="Arial" color="#000000">Otro</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC99"><b><font face="Arial" color="#000000">7.1 Espirometria</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC99"><b><font face="Arial" color="#000000">7.2 Audiometría</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC99"><b><font face="Arial" color="#000000">7.3 Optometría</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC99"><b><font face="Arial" color="#000000">Visiometria</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC99"><b><font face="Arial" color="#000000">7.4 Electrocardiograma</font></b></td>
		<td style="border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC99"><b><font face="Arial" color="#000000">Examen Coordinación motriz</font></b></td>
		<td style="border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC99"><b><font face="Arial" color="#000000">Examen de Psicologia</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFCC99"><b><font face="Arial" color="#000000">7.5 Otro</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF99CC"><b><font face="Arial" color="#000000">8.1 Cuadro Hemático</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF99CC"><b><font face="Arial" color="#000000">8.2 Glicemia pre y pos</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF99CC"><b><font face="Arial" color="#000000">8.3 Perfil lipídico</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF99CC"><b><font face="Arial" color="#000000">8.4 Parcial de Orina</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF99CC"><b><font face="Arial" color="#000000">8.5 Otro</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">9.1 Tétanos (TD)</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">9.2 Fiebre Amarilla</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">9.3 Hepatitis B</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">9.4 Antirrábica</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">9.5 Otra</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">PVE requerido</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">Recomendaciones</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">Restricciones</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">9.7 Remisión EPS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">9.8 Fecha compromiso asistencia a EPS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">9.9 Asistencia a EPS</font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
	</tr>
	@for($i=0; $i < 5; $i++)
	<tr>
		<td height="39" align="left" valign=middle ><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="center" valign=middle  sdval="1" sdnum="1033;"><b><font face="Arial" color="#000000"></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial" color="#000000">
		<select id="cargo" class="form-control" name="apellidos_nombres[]">
			@foreach ($empleados as $empleado)
				<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cedula}} - {{$empleado->cargos->cargo}}</option>
			@endforeach
		</select>
		<br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial" color="#000000"><textarea class="campo" placeholder=""  name="centro_trabajo[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial" color="#000000"><textarea class="campo" placeholder=""  name="tipo_examen[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle ><font face="Arial" color="#000000"><input class="" placeholder="fecha" type="date"  name="fecha_examen[]" value="{{ date('Y-m-d') }}"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="musculo_esqueletico[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="dermatologico[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="respiratorio[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="cardiovascular[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="trabajo_alturas[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="test_fobias_trabajo_alturas[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="otro[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="espirometria[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="audiometria[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="optometria[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="visiometria[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="electrocardiograma[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="examen_coordinacion_motriz[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="examen_psicologia[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="otro_complementario[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="cuadro_hematico[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="glicemia_pre_pos[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="perfil_lipido[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="parcial_orina[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="otro_laboratorio[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="tetanos[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="fiebre_amarilla[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="hepatitis_b[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="antirrabica[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="otro_vacuna[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="pve_requerido[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="recomendaciones[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="restricciones[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><textarea class="campo" placeholder=""  name="remision_eps[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle ><font face="Arial"><input class="" placeholder="fecha" type="date"  name="fecha_compromiso_asistencia_eps[]" value="{{ date('Y-m-d') }}"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle ><font face="Arial"><input class="" placeholder="fecha" type="date"  name="asistencia_eps[]" value="{{ date('Y-m-d') }}"><br></font></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center"><b><font face="Arial" color="#000000"><br></font></b></td>
	</tr>
	@endfor
</table>
<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()">
</form> 
<!-- ************************************************************************** --> <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
</body>
