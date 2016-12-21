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
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial"; font-size:x-small }
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
<form method="POST" action="{{ url('/cloud/form/44') }}">
{{ csrf_field() }}
<table align="left" cellspacing="0" border="0">
	<colgroup width="37"></colgroup>
	<colgroup width="135"></colgroup>
	<colgroup width="92"></colgroup>
	<colgroup width="65"></colgroup>
	<colgroup width="115"></colgroup>
	<colgroup width="132"></colgroup>
	<colgroup width="46"></colgroup>
	<colgroup width="120"></colgroup>
	<colgroup width="94"></colgroup>
	<colgroup span="2" width="46"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup span="5" width="46"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="46"></colgroup>
	<colgroup width="120"></colgroup>
	<colgroup span="3" width="46"></colgroup>
	<colgroup width="63"></colgroup>
	<colgroup width="69"></colgroup>
	<colgroup width="65"></colgroup>
	<colgroup span="3" width="46"></colgroup>
	<colgroup width="55"></colgroup>
	<colgroup width="330"></colgroup>
	<colgroup width="403"></colgroup>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=5 rowspan=3 height="106" align="left" valign=middle><b><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=26 rowspan=2 align="center" valign=middle><b><font size=3>{{$empresa->nombre_empresa}}<input type="hidden" value="{{$empresa->id}}" name="empresa_id" /></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b><font size=3>Codigo: <input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" ></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b><font size=3>Versión: <input class="codigo" placeholder="version" type="text" required name="version"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=26 align="center" valign=middle><b><font size=3>MATRIZ PROGRAMA DE GESTION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b><font size=3>Fecha: <input class="codigo" placeholder="fecha" type="date" required name="fecha" ></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="23" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=14 height="37" align="center" valign=middle bgcolor="#50b308"><b><font size=3> POLITICAS QUE APLICAN AL PROGRAMA </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=18 align="center" valign=middle bgcolor="#50b308"><b><font size=3> OBJETIVOS ESTRATEGICO QUE APLICAN AL PROGRAMA</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=14   align="left" valign=middle><font size=3>
			<select id="cargo" class="form-control" name="politicas_id" style="width:90%;">
				@foreach ($t1s as $t1)
					@foreach($t1->T1Detalles as $t1detalle)
						<option value="{{$t1detalle->id}}">{{$t1detalle->politica_sistema_gestion}}</option>
					@endforeach
				@endforeach
			</select>
		<br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=18  align="left" valign=middle><font size=3 color="#993300">
			<select id="cargo" class="form-control" name="objetivos_est_id" style="width:90%;">
				@foreach ($t1s as $t1)
					@foreach($t1->T1Detalles as $t1detalle)
						<option value="{{$t1detalle->id}}">{{$t1detalle->objetivo}}</option>
					@endforeach
				@endforeach
			</select>
		<br></font></td>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=14  align="center" valign=middle bgcolor="#50b308"><b><font size=3>3. OBJETIVOS DEL PROGRAMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=17 align="center" valign=middle bgcolor="#50b308"><b><font size=3>4. META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=3>VALOR</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=14 rowspan=5  align="left" valign=middle><font size=3><textarea class="campo" name="objetivos_programa"></textarea><br></font></td>
		@for($i=0; $i < 4; $i++)
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=17  align="left" valign=middle><font size=3><textarea class="campo" name="meta[]"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000"  align="justify" valign=middle><font size=3 color="#993300"><textarea class="campo" name="valor[]"></textarea><br></font></td>
			</tr>
		@endfor
	</tr>
	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=14 height="23" align="left" valign=middle bgcolor="#50b308"><b><font size=3>6. RESPONSABLE DEL PROGRAMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" valign=middle bgcolor="#50b308"><b><font size=3>RECURSOS DEL PROGRAMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=9 align="center" valign=middle bgcolor="#50b308"><b><font size=3>5. ALCANCE DEL PROGRAMA</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=14 height="13" align="center" valign=middle bgcolor="#50b308"><b><font size=3>Nombre apellidos y cargo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 rowspan=3 align="justify" valign=middle><font size=3 color="#993300">
			<select id="cargo" class="form-control" name="recurso_id" style="width:90%;">
				@foreach ($t2s as $t2)
					<option value="{{$t2->id}}">{{$t2->codigo}} - {{$t2->version}} - {{$t2->fecha}}</option>
				@endforeach
			</select>
		<br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=9 rowspan=3 align="left" valign=middle><font size=3 color="#993300"><textarea class="campo" name="alcance_programa"></textarea><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=14 rowspan=2  align="center" valign=middle bgcolor="#FFFFFF"><font size=3 color="#993300">
			<select id="cargo" class="form-control" name="responsable_id" style="width:90%;">
				@foreach ($empleados as $empleado)
					<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
				@endforeach
			</select>
		<br></font></td>
		</tr>
	<tr>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="19" align="center" valign=middle bgcolor="#50b308"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=6 height="42" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3>CONVENCIONES CRONOGRAMA DE ACTIVIDADES</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00"><b><font size=3>P</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFF00"><b><font size=3>Programado</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="1" sdnum="1033;"><b><font size=3>1</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#99CC00"><b><font size=3>E </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#99CC00"><b><font size=3>Ejecutado</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#99CC00" sdval="1" sdnum="1033;"><b><font size=3>1</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF0000"><b><font size=3>N</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FF0000"><b><font size=3>No ejecutado</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=6 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3 color="#993300"><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="24" align="center" valign=middle bgcolor="#50b308"><b><font size=3>CRONOGRAMA DE ACTIVIDADES</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=6 height="23" align="center" valign=middle bgcolor="#50b308"><b><font size=3>ACTIVIDAD</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>ENE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>FEB</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>MAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>ABR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>MAY</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>JUN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>JUL</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>AGO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>SEPT</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>OCT</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>NOV</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FF9900"><b><font size=3>DIC</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF9900"><b><font size=3>Responsable</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FF9900"><b><font size=3>Evidencia</font></b></td>
	</tr>	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle bgcolor="#FFFF00"><b><font size=3>PLANIFICAR</font></b></td>
		@for($i=0; $i < 5; $i++)
			<tr>		
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5  align="left" valign=middle bgcolor="#FFFFFF"><font size=3 color="#993300"><textarea class="campo" placeholder="" name="actividad[]" ></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ene_p_{{$i}}" name="ene_p[]" onchange="suma('ene_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ene_e_{{$i}}" name="ene_e[]" onchange="suma('ene_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="feb_p_{{$i}}" name="feb_p[]" onchange="suma('feb_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="feb_e_{{$i}}" name="feb_e[]" onchange="suma('feb_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="mar_p_{{$i}}" name="mar_p[]" onchange="suma('mar_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="mar_e_{{$i}}" name="mar_e[]" onchange="suma('mar_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="abr_p_{{$i}}" name="abr_p[]" onchange="suma('abr_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="abr_e_{{$i}}" name="abr_e[]" onchange="suma('abr_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="may_p_{{$i}}" name="may_p[]" onchange="suma('may_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ene_e_{{$i}}" name="may_e[]" onchange="suma('may_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="jun_p_{{$i}}" name="jun_p[]" onchange="suma('jun_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="jun_e_{{$i}}" name="jun_e[]" onchange="suma('jun_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="jul_p_{{$i}}" name="jul_p[]" onchange="suma('jul_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="jul_e_{{$i}}" name="jul_e[]" onchange="suma('jul_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ago_p_{{$i}}" name="ago_p[]" onchange="suma('ago_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ago_e_{{$i}}" name="ago_e[]" onchange="suma('ago_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="sep_p_{{$i}}" name="sep_p[]" onchange="suma('sep_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="sep_e_{{$i}}" name="sep_e[]" onchange="suma('sep_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="oct_p_{{$i}}" name="oct_p[]" onchange="suma('oct_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="oct_e_{{$i}}" name="oct_e[]" onchange="suma('oct_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="nov_p_{{$i}}" name="nov_p[]" onchange="suma('nov_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="nov_e_{{$i}}" name="nov_e[]" onchange="suma('nov_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="dic_p_{{$i}}" name="dic_p[]" onchange="suma('dic_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="dic_e_{{$i}}" name="dic_e[]" onchange="suma('dic_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="left" valign=middle><font size=3><textarea class="campo" placeholder=""  name="evidencias[]" ></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000"  align="left" valign=middle><font size=3>
					<select id="cargo" class="form-control" name="responsable_plan_id" style="width:90%;">
						@foreach ($empleados as $empleado)
							<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
						@endforeach
					</select>
				<br></font></td>
			</tr>
		@endfor
	</tr>
	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=12  align="center" valign=middle bgcolor="#FF6600"><b><font size=3>HACER</font></b></td>
		@for($i=5; $i < 14; $i++)
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5  align="left" valign=middle bgcolor="#FFFFFF"><font size=3 color="#993300"><textarea class="campo" placeholder="" name="actividad[]" ></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ene_p_{{$i}}" name="ene_p[]" onchange="suma('ene_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ene_e_{{$i}}" name="ene_e[]" onchange="suma('ene_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="feb_p_{{$i}}" name="feb_p[]" onchange="suma('feb_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="feb_e_{{$i}}" name="feb_e[]" onchange="suma('feb_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="mar_p_{{$i}}" name="mar_p[]" onchange="suma('mar_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="mar_e_{{$i}}" name="mar_e[]" onchange="suma('mar_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="abr_p_{{$i}}" name="abr_p[]" onchange="suma('abr_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="abr_e_{{$i}}" name="abr_e[]" onchange="suma('abr_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="may_p_{{$i}}" name="may_p[]" onchange="suma('may_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ene_e_{{$i}}" name="may_e[]" onchange="suma('may_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="jun_p_{{$i}}" name="jun_p[]" onchange="suma('jun_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="jun_e_{{$i}}" name="jun_e[]" onchange="suma('jun_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="jul_p_{{$i}}" name="jul_p[]" onchange="suma('jul_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="jul_e_{{$i}}" name="jul_e[]" onchange="suma('jul_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ago_p_{{$i}}" name="ago_p[]" onchange="suma('ago_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="ago_e_{{$i}}" name="ago_e[]" onchange="suma('ago_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="sep_p_{{$i}}" name="sep_p[]" onchange="suma('sep_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="sep_e_{{$i}}" name="sep_e[]" onchange="suma('sep_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="oct_p_{{$i}}" name="oct_p[]" onchange="suma('oct_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="oct_e_{{$i}}" name="oct_e[]" onchange="suma('oct_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="nov_p_{{$i}}" name="nov_p[]" onchange="suma('nov_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="nov_e_{{$i}}" name="nov_e[]" onchange="suma('nov_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="dic_p_{{$i}}" name="dic_p[]" onchange="suma('dic_p')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="dic_e_{{$i}}" name="dic_e[]" onchange="suma('dic_e')"></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="left" valign=middle><font size=3><textarea class="campo" placeholder=""  name="evidencias[]" ></textarea><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000"  align="left" valign=middle><font size=3>
					<select id="cargo" class="form-control" name="responsable_plan_id" style="width:90%;">
						@foreach ($empleados as $empleado)
							<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
						@endforeach
					</select>
				<br></font></td>
			</tr>
			</tr>
		@endfor
	</tr>
	
	
	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><font size=3>ACTIVIDADES PROGRAMADAS Y EJECUTADAS</font></td>
		<td id="ene_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="ene_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle sdval="0" sdnum="1033;"></td>
		<td id="feb_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="feb_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="mar_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="mar_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="abr_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="abr_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="may_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="may_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="jun_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="jun_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="jul_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="jul_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="ago_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="ago_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="sep_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="sep_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="oct_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="oct_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="nov_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="nov_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td id="dic_p" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"></td>
		<td id="dic_e" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FF0000" sdval="0" sdnum="1033;"></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3> </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000"  align="center" valign=middle><font size=3><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font size=3 color="#000000">PORCENTAJE DE CUMPLIMIENTO ACTIVIDADES</font></b></td>
		<td ondblclick="calcular_cumplimiento('ene')" id="cumplimiento_ene" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('feb')" id="cumplimiento_feb" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('mar')" id="cumplimiento_mar" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('abr')" id="cumplimiento_abr" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('may')" id="cumplimiento_may" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('jun')" id="cumplimiento_jun" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('jul')" id="cumplimiento_jul" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('ago')" id="cumplimiento_ago" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('sep')" id="cumplimiento_sep" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('oct')" id="cumplimiento_oct" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('nov')" id="cumplimiento_nov" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		<td ondblclick="calcular_cumplimiento('dic')" id="cumplimiento_dic" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;0%"></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="21" align="center" valign=middle bgcolor="#50b308"><b><font size=3>INDICADORES DEL SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="11" align="center" valign=middle bgcolor="#50b308"><b><font size=3>INDICADOR DE CUMPLIMIENTO</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=5 height="21" align="center" valign=middle bgcolor="#50b308"><b><font size=3>DESCRIPCIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 align="center" valign=middle bgcolor="#50b308"><b><font size=3>NOMBRE DE LA GRAFICA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=3>11.6 ANALISIS  </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=24 height="769" align="center" valign=middle bgcolor="#99CC00"><b><font size=3>VERIFICAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=8 align="justify" valign=middle bgcolor="#FFFFFF"><b><font size=3>Objetivo Específico Relacionado:<br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 rowspan=17 align="center" valign=middle><font size=3><br><img src="../images/4.png" width=1257 height=467 hspace=110 vspace=18>
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 rowspan=24 align="left" valign=middle bgcolor="#FFFFFF"><i><font size=3>ANALISIS TENDENCIAL<br><br>PRIMER TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br>  <br>SEGUNDO TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br><br>TERCER TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br><br>CUARTOTRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:</font></i></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=7 align="justify" valign=middle bgcolor="#FFFFFF"><b><font size=3>11.2 Descripción:<br><br></font></b></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=5 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3>11.3 Metodo de calculo<br></font></b></td>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><b><i><font size=3><br></font></i></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" sdval="0" sdnum="1033;0;0%"><b><font size=3>#DIV/0!</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" sdval="0" sdnum="1033;0;0%"><b><font size=3>#DIV/0!</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" sdval="0" sdnum="1033;0;0%"><b><font size=3>#DIV/0!</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" sdval="0" sdnum="1033;0;0%"><b><font size=3>#DIV/0!</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=4 align="left" valign=middle><font size=3>  11.4 Frecuencia de medición<br><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFFF99"><b><font size=3>ENE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFFF99"><b><font size=3>FEB</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFFF99"><b><font size=3>MAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CC99FF"><b><font size=3>ABR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CC99FF"><b><font size=3>MAY</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CC99FF"><b><font size=3>JUN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFCC00"><b><font size=3>JUL</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFCC00"><b><font size=3>AGO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFCC00"><b><font size=3>SEPT</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CCFFFF"><b><font size=3>OCT</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CCFFFF"><b><font size=3>NOV</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CCFFFF"><b><font size=3>DIC</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#FFFF99"><b><font size=3>TRIMESTRE 1</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#CC99FF"><b><font size=3>TRIMESTRE 2</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#FFCC00"><b><font size=3>TRIMESTRE 3</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#CCFFFF"><b><font size=3>TRIMESTRE 4</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFFF99"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFFF99" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#800080"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#800080" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFCC00"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFCC00" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#CCFFFF"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#CCFFFF" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFFF99" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFFF99" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#800080" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#800080" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFCC00" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFCC00" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#CCFFFF" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#CCFFFF" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="22" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=5 height="21" align="center" valign=middle bgcolor="#50b308"><b><font size=3>DESCRIPCIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 align="center" valign=middle bgcolor="#50b308"><b><font size=3> NOMBRE DE LA GRAFICA DEL INDICADOR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=3>ANALISIS  </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=24 height="605" align="center" valign=middle bgcolor="#99CC00"><b><font size=3>VERIFICAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=4 align="left" valign=middle><b><font size=3> Objetivo Específico Relacionado<br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 rowspan=17 align="center" valign=middle><font size=3><br><img src="../images/2.png" width=967 height=377 hspace=185 vspace=16>
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 rowspan=24 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3>PRIMER TRIMESTRE: <br><br>Analisis:<br>Causas:  <br>Acción:  <br>Tendencia:<br>  <br>SEGUNDO TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br><br>TERCER TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br><br>CUARTOTRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:</font></b></td>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=10 align="left" valign=middle><font size=3> Descripción:<br><br></font></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=6 align="left" valign=middle><font size=3>  Fórmula:<br></font></td>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><b><i><font size=3><br></font></i></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" sdval="0" sdnum="1033;0;0%"><b><font size=3>#DIV/0!</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" sdval="0" sdnum="1033;0;0%"><b><font size=3>#DIV/0!</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" sdval="0" sdnum="1033;0;0%"><b><font size=3>#DIV/0!</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" sdval="0" sdnum="1033;0;0%"><b><font size=3>#DIV/0!</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#008000" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=4 align="left" valign=middle><font size=3> Período de Evaluación:<br><br><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFFF99"><b><font size=3>ENE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFFF99"><b><font size=3>FEB</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFFF99"><b><font size=3>MAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CC99FF"><b><font size=3>ABR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CC99FF"><b><font size=3>MAY</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CC99FF"><b><font size=3>JUN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFCC00"><b><font size=3>JUL</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFCC00"><b><font size=3>AGO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FFCC00"><b><font size=3>SEPT</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CCFFFF"><b><font size=3>OCT</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CCFFFF"><b><font size=3>NOV</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#CCFFFF"><b><font size=3>DIC</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#FFFF99"><b><font size=3>TRIMESTRE 1</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#CC99FF"><b><font size=3>TRIMESTRE 2</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#FFCC00"><b><font size=3>TRIMESTRE 3</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#CCFFFF"><b><font size=3>TRIMESTRE 4</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFFF99"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFFF99" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#800080"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#800080" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFCC00"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFCC00" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#CCFFFF"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#CCFFFF" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFFF99" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" bgcolor="#FFFF99" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF99"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF99"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#800080" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" bgcolor="#800080" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#800080"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#800080"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFCC00" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FFCC00" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#CCFFFF" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" bgcolor="#CCFFFF" sdval="0" sdnum="1033;0;0%"><b><font size=3>0%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#CCFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#CCFFFF"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="46" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=5 height="23" align="center" valign=middle bgcolor="#50b308"><b><font size=3>DESCRIPCIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 align="center" valign=middle bgcolor="#50b308"><b><font size=3>11.5 NOMBRE DE LA GRAFICA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=3>11.6 ANALISIS  </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=22 height="555" align="center" valign=middle bgcolor="#99CC00"><b><font size=3>VERIFICAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=8 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3>  Objetivo Específico Relacionado:<br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 rowspan=16 align="center" valign=middle><font size=3><br><img src="../images/5.png" width=928 height=315 hspace=171 vspace=15>
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 rowspan=22 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3> <br>ANALISIS TENDENCIAL<br><br>PRIMER TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br>  <br>SEGUNDO TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br><br>TERCER TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br><br>CUARTOTRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:</font></b></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=6 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3>Descripción:<br><br></font></b></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=5 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3>  Fórmula:<br><br><br></font></b></td>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="center" bgcolor="#50b308"><b><font size=3>PRIMER  SEMESTRE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="center" bgcolor="#FF6600"><b><font size=3>SEGUNDO SEMESTRE</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#50b308"><b><font size=3># EXPUESTOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" bgcolor="#50b308"><b><font size=3># CASOS NUEVOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#50b308"><b><font size=3># CASOS ANTIGUOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FF6600"><b><font size=3># EXPUESTOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" bgcolor="#FF6600"><b><font size=3># CASOS NUEVOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#FF6600"><b><font size=3># CASOS ANTIGUOS</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle bgcolor="#50b308" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=middle bgcolor="#50b308" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 rowspan=2 align="center" valign=middle bgcolor="#50b308" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle bgcolor="#FF6600" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=middle bgcolor="#FF6600" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 rowspan=2 align="center" valign=middle bgcolor="#FF6600" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=3 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3> Período de Evaluación:<br><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#50b308"><b><font size=3>META %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#50b308" sdval="0" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3> -      </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#FF6600"><b><font size=3>META %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FF6600" sdval="0" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3> -      </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#50b308" sdnum="1033;0;0%"><b><font size=3>LOGRADO %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#50b308" sdval="0" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3> -      </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#FF6600" sdnum="1033;0;0%"><b><font size=3>LOGRADO %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FF6600" sdval="0" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3> -      </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="26" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=5 height="26" align="center" valign=middle bgcolor="#50b308"><b><font size=3>DESCRIPCIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 align="center" valign=middle bgcolor="#50b308"><b><font size=3>11.5 NOMBRE DE LA GRAFICA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=3>11.6 ANALISIS  </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=23 height="692" align="center" valign=middle bgcolor="#99CC00"><b><font size=3>VERIFICAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=8 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3>Objetivo Específico Relacionado:<br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 rowspan=16 align="center" valign=middle><font size=3><br><img src="../images/1.png" width=759 height=418 hspace=221 vspace=15>
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 rowspan=23 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3> <br><br> <br>ANALISIS TENDENCIAL<br><br>PRIMER TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br>  <br>SEGUNDO TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br><br>TERCER TRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:<br><br>CUARTOTRIMESTRE: <br><br>Causas:  <br>Acción:  <br>Tendencia:</font></b></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=8 align="left" valign=middle><font size=3> Descripción:<br><br><br></font></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=4 align="left" valign=top><font size=3> Fórmula:<br><br><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#99CC00"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="center" bgcolor="#50b308"><b><font size=3>PRIMER  SEMESTRE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="center" bgcolor="#FF6600"><b><font size=3>SEGUNDO SEMESTRE</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#50b308"><b><font size=3># EXPUESTOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" bgcolor="#50b308"><b><font size=3># CASOS NUEVOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#50b308"><b><font size=3># CASOS ANTIGUOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#FF6600"><b><font size=3># EXPUESTOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" bgcolor="#FF6600"><b><font size=3># CASOS NUEVOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" bgcolor="#FF6600"><b><font size=3># CASOS ANTIGUOS</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle bgcolor="#50b308" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=middle bgcolor="#50b308" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 rowspan=2 align="center" valign=middle bgcolor="#50b308" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle bgcolor="#FF6600" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=middle bgcolor="#FF6600" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 rowspan=2 align="center" valign=middle bgcolor="#FF6600" sdval="0" sdnum="1033;"><b><font size=3>0</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=3 align="left" valign=middle><font size=3>Período de Evaluación:<br><br>(Trimestral - Semestral - Anual)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#50b308"><b><font size=3>META %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="right" bgcolor="#50b308" sdval="0" sdnum="1033;0;@"><b><font size=3>0</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#FF6600"><b><font size=3>META %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FF6600" sdval="0" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3> -      </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#50b308" sdnum="1033;0;0%"><b><font size=3>LOGRADO %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="right" bgcolor="#50b308" sdval="0" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3>#DIV/0!</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#FF6600" sdnum="1033;0;0%"><b><font size=3>LOGRADO %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FF6600" sdval="0" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3> -      </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 align="center" bgcolor="#50b308"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="26" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=5 height="26" align="center" valign=middle bgcolor="#50b308"><b><font size=3>DESCRIPCIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 align="center" valign=middle bgcolor="#50b308"><b><font size=3>11.5 NOMBRE DE LA GRAFICA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=3>11.6 ANALISIS  </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=19 height="572" align="center" valign=middle bgcolor="#99CC00"><b><font size=3>VERIFICAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=8 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3>Objetivo Específico Relacionado<br><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=25 rowspan=16 align="center"><font size=3> </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=2 rowspan=19 align="left" valign=top bgcolor="#FFFFFF"><b><font size=3> ANALISIS DE  EFICACIA<br><br>PRIMER SEMESTRE:  <br>Causas: <br> Acción: <br>Tendencia: <br><br>SEGUNDO SEMESTRE: <br> <br> Causas: <br>Tendencia: </font></b></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=4 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3> Descripción:<br><br></font></b></td>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=4 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=3 align="left" valign=middle bgcolor="#FFFFFF"><font size=3>Período de Evaluación<br><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#99CC00"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="center" valign=middle bgcolor="#50b308"><b><font size=3>PRIMER  SEMESTRE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="center" valign=middle bgcolor="#FF6600"><b><font size=3>SEGUNDO SEMESTRE</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#50b308"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#50b308" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3>   </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#FF6600"><b><font size=3>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FF6600" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3>   </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#50b308" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#50b308" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3>   </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" bgcolor="#FF6600" sdnum="1033;0;0%"><b><font size=3>LOGRADO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" bgcolor="#FF6600" sdval="0" sdnum="1033;0;_-* #,##0 _€_-;-* #,##0 _€_-;_-* &quot;-&quot;?? _€_-;_-@_-"><b><font size=3> -      </font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="21" align="center" valign=middle bgcolor="#FFFFFF"><b><i><font size=3 color="#800080"><br></font></i></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=30 height="11" align="center" valign=middle bgcolor="#50b308"><b><font size=3>PLAN DE ACCION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle><font size=3><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=6 height="340" align="center" valign=middle bgcolor="#FF0000"><b><font size=3>ACTUAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#50b308"><b><font size=3>HALLAZGOS DEL PROGRAMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#50b308"><b><font size=3>GESTION PROPUESTA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#50b308"><b><font size=3>RESPONSABLE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><b><font size=3>FECHA COMPROMISO DE EJECUCION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#50b308"><b><font size=3>FECHA DE EJECUCION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=3>CIERRE OPORTUNO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=3>EVIDENCIA</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=3><br></font></b></td>
	</tr>
</table>
<div class="sign-up"><input type="submit" value="Nuevo"/></div>
<div class="sign-up"><input type="submit" value="Guardar"/></div>
<div class="sign-up"><input type="submit" value="Editar"/></div>
<div class="sign-up"><input type="submit" value="Eliminar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
<!-- ************************************************************************** -->
<script>
	function suma(id){
		var val1 = document.getElementById(id+"_0").value;
		console.log(val1);
		var val2 = document.getElementById(id+"_1").value;
		var val3 = document.getElementById(id+"_2").value;
		var val4 = document.getElementById(id+"_3").value;
		var val5 = document.getElementById(id+"_4").value;
		var val6 = document.getElementById(id+"_5").value;
		var val7 = document.getElementById(id+"_6").value;
		var val8 = document.getElementById(id+"_7").value;
		var val9 = document.getElementById(id+"_8").value;
		var val10 = document.getElementById(id+"_9").value;
		var val11 = document.getElementById(id+"_10").value;
		var val12 = document.getElementById(id+"_11").value;
		var val13 = document.getElementById(id+"_12").value;
		var val14 = document.getElementById(id+"_13").value;
		
		if(val1 == "") val1 = 0;
		if(val2 == "") val2 = 0;
		if(val3 == "") val3 = 0;
		if(val4 == "") val4 = 0;
		if(val5 == "") val5 = 0;
		if(val6 == "") val6 = 0;
		if(val7 == "") val7 = 0;
		if(val8 == "") val8 = 0;
		if(val9 == "") val9 = 0;
		if(val10 == "") val10 = 0;
		if(val11 == "") val11 = 0;
		if(val12 == "") val12 = 0;
		if(val13 == "") val13 = 0;
		if(val14 == "") val14 = 0;

		var suma = (parseInt(val1)+parseInt(val2)+parseInt(val3)+parseInt(val4)+parseInt(val5)+parseInt(val6)+parseInt(val7)+parseInt(val8)+parseInt(val9)+parseInt(val10)+parseInt(val11)+parseInt(val12)+parseInt(val13)+parseInt(val14));

		var campo_suma = document.getElementById(id);

		campo_suma.innerHTML = suma;
	}

	function calcular_cumplimiento(mes){
		var mes_p = document.getElementById(mes+"_p").innerHTML;
		var mes_e = document.getElementById(mes+"_e").innerHTML;

		var cumplimiento = (mes_e/mes_p) * 100;

		var campo_cumplimiento = document.getElementById('cumplimiento'+'_'+mes);
		campo_cumplimiento.innerHTML = cumplimiento+'%';	
	}
</script> 
</body>