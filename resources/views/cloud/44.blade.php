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
<form method="POST" action="{{ url('/cloud/form/44') }}" enctype="multipart/form-data">
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=14 rowspan=6  align="left" valign=middle><font size=3><textarea class="campo" name="objetivos_programa"></textarea><br></font></td>
		@for($i=0; $i < 5; $i++)
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=17  align="left" valign=middle><font size=3><textarea class="campo" name="metas[]"></textarea><br></font></td>
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
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FF9900"><b><font size=3>Evidencia</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FF9900"><b><font size=3>Responsable</font></b></td>
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
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="may_e_{{$i}}" name="may_e[]" onchange="suma('may_e')"></textarea><br></font></td>
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
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="left" valign=middle><font size=3><input type="file" class="campo" placeholder=""  name="evidencias[]" /><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000"  align="left" valign=middle><font size=3>
					<select id="cargo" class="form-control" name="responsable_plan_id[]" style="width:90%;">
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
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><font size=3><textarea class="campo" placeholder="" id="may_e_{{$i}}" name="may_e[]" onchange="suma('may_e')"></textarea><br></font></td>
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
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="left" valign=middle><font size=3><input type="file" class="campo" placeholder=""  name="evidencias[]" /><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000"  align="left" valign=middle><font size=3>
					<select id="cargo" class="form-control" name="responsable_plan_id[]" style="width:90%;">
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

	<!--Inicio de los graficos-->
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="21" align="center" valign=middle bgcolor="#50b308"><b><font size=3>INDICADORES DEL SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 height="11" align="center" valign=middle bgcolor="#50b308"><b><font size=3>INDICADOR DE CUMPLIMIENTO</font></b></td>
	</tr>
	@for($g=0; $g<8; $g++)	
	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=32 align="center" valign=middle bgcolor="#50b308"><b><font size=3>NOMBRE DE LA GRAFICA <input type="hidden" value="{{$g}}" name="numero_grafico[{{$g}}]" /></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=32 align="center" valign=middle bgcolor="#50b308"><b><font size=3><textarea class="campo" placeholder="" name="nombre_grafico[{{$g}}]" ></textarea></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=32 height=300 align="center" valign=middle><div id="espgrafico_{{$g}}" style="width:730; height:250;"></div></td>
	</tr>

	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 align="center" valign=middle bgcolor="#50b308" ><font size=3>Metodo de calculo</font></td>
	</tr>

	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=32  align="center" valign=middle><font size=3>
			<select id="metodo_calculo_{{$g}}" class="form-control" name="metodo_calculo[{{$g}}]" >
				@if($g == 0 || $g == 1 || $g == 2)
					<option value="1">
					@if($g == 0) 
						# Actividades ejecutadas * 100 / # Actividades Programadas 
					@elseif($g == 1) 
						# Trabajadores involucrados en las actividades * 100 / # Trabajadores expuestos 
					@else 
						Sumatoria puntaje obtenido * 100 / Sumatoria puntaje posible
					@endif
					</option>
					
				@elseif($g == 3 || $g == 4 || $g == 5)
					<option value="2">
						@if($g == 3) 
							[#Total de casos / Total trabajadores expuestos] * K  
						@elseif($g == 4) 
							[# Casos nuevos calificados / # Expuestos] * K 
						@else
							[# Accidentes de trabajo / # Horas trabajadas] * K 
						@endif
					</option>
				@else
					<option value="3">
					@if($g == 6) 
						Cero Accidentes
					@else
						Cero Enfermedades
					@endif
					</option>
					
				@endif
			</select>
		</font></td>
	</tr>

	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=32 align="center" valign=middle bgcolor="#50b308" ><font size=3>Frecuencia</font></td>
	</tr>
		
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=32  align="center" valign=middle><font size=3>
			<select id="frecuencia_medicion_reporte_{{$g}}" class="form-control" name="frecuencia_medicion_reporte[{{$g}}]" onchange="boton({{$g}})">
				<option value="1">Anual</option>
				<option value="2">Semestral</option>
				<option value="4">Trimestral</option>
			</select>
		</font></td>
	</tr>
	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=32  align="center" valign=middle><font size=3><button type="button" class="btn btn-success btn-block btn-lg" id="modalbtn_{{$g}}" onclick="modal({{$g}})" data-toggle="modal" data-target="#modal_{{$g}}_1">RESULTADOS GRAFICO {{$g+1}}</button></font></td>
	</tr>
	<tr>
		<td align="center" valign=middle colspan="32"><font size="3" aling="center"> *** </font></td>
	</tr>
	@endfor
	
	
</table>

<!-- modal -->
@for($m=0; $m<8; $m++)
<!-- modal anual-->
<div class="modal fade" id="modal_{{$m}}_1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="modal_title_{{$m}}_1" class="modal-title"></h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Objetivo</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Descripcion</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Analisis</font></td>
						@if($m == 0 || $m == 1 || $m == 2)
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 1</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 2</font></td>
						@elseif($m == 3 || $m == 4 || $m == 5)
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 1</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 2</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">K</font></td>
						@endif
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Meta</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Logrado</font></td>
					</tr>
					@for($f=0; $f<1; $f++)
						<tr>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">{{$f + 1}}</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><textarea class="campo" placeholder="" name="objetivo[{{$m}}][1][]"></textarea></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder="" name="descripcion[{{$m}}][1][]"></textarea></font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder="" name="analisis[{{$m}}][1][]"></textarea><br></font></td>
							@if($m == 0 || $m == 1 || $m == 2)
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder="" id="valor1_{{$m}}_1_{{$f}}" onchange="calculo({{$m}},1, {{$f}})" ondblclick="calculo({{$m}},1, {{$f}})" name="valor1[{{$m}}][1][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor2_{{$m}}_1_{{$f}}" onchange="calculo({{$m}},1, {{$f}})" ondblclick="calculo({{$m}},1, {{$f}})" name="valor2[{{$m}}][1][]"></textarea><br></font></td>
							@elseif($m == 3 || $m == 4 || $m == 5)
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder="" id="valor1_{{$m}}_1_{{$f}}" onchange="calculo({{$m}},1, {{$f}})" ondblclick="calculo({{$m}},1, {{$f}})" name="valor1[{{$m}}][1][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor2_{{$m}}_1_{{$f}}" onchange="calculo({{$m}},1, {{$f}})" ondblclick="calculo({{$m}},1, {{$f}})"  name="valor2[{{$m}}][1][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor3_{{$m}}_1_{{$f}}" onchange="calculo({{$m}},1, {{$f}})" ondblclick="calculo({{$m}},1, {{$f}})"  name="valor3[{{$m}}][1][]"></textarea><br></font></td>
							@endif
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="meta_{{$m}}_1_{{$f}}" onchange="calculo({{$m}},1, {{$f}})" ondblclick="calculo({{$m}},1, {{$f}})"  name="meta[{{$m}}][1][]"></textarea><br></font></td>
							<td id="logrado_{{$m}}_1_{{$f}}" ondblclick="calculo({{$m}},1, {{$f}})"style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF">0</td>
						</tr>
					@endfor
				</table>
			</div>
			<br>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar({{$m}})" data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- modal semestral-->
<div class="modal fade" id="modal_{{$m}}_2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="modal_title_{{$m}}_2" class="modal-title"></h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Objetivo</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Descripcion</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Analisis</font></td>
						@if($m == 0 || $m == 1 || $m == 2)
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 1</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 2</font></td>
						@elseif($m == 3 || $m == 4 || $m == 5)
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 1</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 2</font></td>
							
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">K</font></td>
						@endif
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Meta</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Logrado</font></td>
					</tr>
					@for($f=0; $f<2; $f++)
						<tr>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">{{$f + 1}}</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><textarea class="campo" placeholder="" name="objetivo[{{$m}}][2][]"></textarea></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder="" name="descripcion[{{$m}}][2][]"></textarea></font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder="" name="analisis[{{$m}}][2][]"></textarea><br></font></td>
							@if($m == 0 || $m == 1 || $m == 2)
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder="" id="valor1_{{$m}}_2_{{$f}}" onchange="calculo({{$m}},2, {{$f}})" ondblclick="calculo({{$m}},2, {{$f}})" name="valor1[{{$m}}][2][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor2_{{$m}}_2_{{$f}}" onchange="calculo({{$m}},2, {{$f}})" ondblclick="calculo({{$m}},2, {{$f}})" name="valor2[{{$m}}][2][]"></textarea><br></font></td>
							@elseif($m == 3 || $m == 4 || $m == 5)
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder="" id="valor1_{{$m}}_2_{{$f}}" onchange="calculo({{$m}},2, {{$f}})" ondblclick="calculo({{$m}},2, {{$f}})" name="valor1[{{$m}}][2][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor2_{{$m}}_2_{{$f}}" onchange="calculo({{$m}},2, {{$f}})" ondblclick="calculo({{$m}},2, {{$f}})" name="valor2[{{$m}}][2][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor3_{{$m}}_2_{{$f}}" onchange="calculo({{$m}},2, {{$f}})" ondblclick="calculo({{$m}},2, {{$f}})"  name="valor3[{{$m}}][2][]"></textarea><br></font></td>
							@endif
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="meta_{{$m}}_2_{{$f}}" onchange="calculo({{$m}},2, {{$f}})" ondblclick="calculo({{$m}},2, {{$f}})"  name="meta[{{$m}}][2][]"></textarea><br></font></td>
							<td id="logrado_{{$m}}_2_{{$f}}" ondblclick="calculo({{$m}},1, {{$f}})"style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF">0</td>
						</tr>
					@endfor
				</table>
			</div>
			<br>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar({{$m}})" data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- modal trimestral-->
<div class="modal fade" id="modal_{{$m}}_4">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="modal_title_{{$m}}_4" class="modal-title"></h3>
			</div>
			<div class="modal-body">
				<table align="left" cellspacing="0" border="0">
					<table align="left" cellspacing="0" border="0">
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Periodo evaluado</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Objetivo</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Descripcion</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><font face="Arial">Analisis</font></td>
						@if($m == 0 || $m == 1 || $m == 2)
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 1</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 2</font></td>
						@elseif($m == 3 || $m == 4 || $m == 5)
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 1</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Valor 2</font></td>
							
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">K</font></td>
						@endif
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Meta</font></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><font face="Arial">Logrado</font></td>
					</tr>
					@for($f=0; $f<4; $f++)
						<tr>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="43" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><font face="Arial">{{$f + 1}}</font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;"><textarea class="campo" placeholder="" name="objetivo[{{$m}}][4][]"></textarea></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;"><font face="Arial"><textarea class="campo" placeholder="" name="descripcion[{{$m}}][4][]"></textarea></font></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder="" name="analisis[{{$m}}][4][]"></textarea><br></font></td>
							@if($m == 0 || $m == 1 || $m == 2)
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder="" id="valor1_{{$m}}_4_{{$f}}" onchange="calculo({{$m}},4, {{$f}})" ondblclick="calculo({{$m}},4, {{$f}})" name="valor1[{{$m}}][4][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor2_{{$m}}_4_{{$f}}" onchange="calculo({{$m}},4, {{$f}})" ondblclick="calculo({{$m}},4, {{$f}})" name="valor2[{{$m}}][4][]"></textarea><br></font></td>
							@elseif($m == 3 || $m == 4 || $m == 5)
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="justify" valign=middle><font face="Arial"><textarea class="campo" placeholder="" id="valor1_{{$m}}_4_{{$f}}" onchange="calculo({{$m}},4, {{$f}})" ondblclick="calculo({{$m}},4, {{$f}})" name="valor1[{{$m}}][4][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor2_{{$m}}_4_{{$f}}" onchange="calculo({{$m}},4, {{$f}})" ondblclick="calculo({{$m}},4, {{$f}})" name="valor2[{{$m}}][4][]"></textarea><br></font></td>
								<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="valor3_{{$m}}_4_{{$f}}" onchange="calculo({{$m}},4, {{$f}})" ondblclick="calculo({{$m}},4, {{$f}})"  name="valor3[{{$m}}][4][]"></textarea><br></font></td>
							@endif
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder="" id="meta_{{$m}}_4_{{$f}}" onchange="calculo({{$m}},4, {{$f}})" ondblclick="calculo({{$m}},4, {{$f}})"  name="meta[{{$m}}][4][]"></textarea><br></font></td>
							<td id="logrado_{{$m}}_4_{{$f}}" ondblclick="calculo({{$m}},4, {{$f}})"style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF">0</td>
						</tr>
					@endfor
				</table>
			</div>
			<br>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default " onclick="graficar({{$m}})" data-dismiss="modal">Close</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endfor
<div class="sign-up"><input type="submit" value="Nuevo"/></div>
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

	function modal(id){
		var frecuencia = document.getElementById('frecuencia_medicion_reporte_'+id).value;
		var periodo = "";
		if(frecuencia == 1){
			periodo = 'Anual';
		}else if(frecuencia == 2){
			periodo = 'Semestral';
		}else{
			periodo = 'Trimestral';
		}
		var grafico = parseInt(id)+1;
		var title = document.getElementById('modal_title_'+id+'_'+frecuencia);

		title.innerHTML = "Resultado "+periodo+" Grafico "+grafico;

	}

	function boton(id){
		var frecuencia = document.getElementById('frecuencia_medicion_reporte_'+id).value;

		var modalbtn = document.getElementById("modalbtn_"+id);

		modalbtn.setAttribute('data-target', '#modal_'+id+'_'+frecuencia);

	}
	function calculo(modal,frecuencia, fila){
		
		if(modal == 0 || modal == 1 || modal == 2){
			var valor1 = document.getElementById("valor1_"+modal+'_'+frecuencia+'_'+fila).value;
			var valor2 = document.getElementById("valor2_"+modal+'_'+frecuencia+'_'+fila).value;

			var logrado = valor1*100/valor2;
		}else if(modal == 3 || modal == 4 || modal == 5){
			var valor1 = document.getElementById("valor1_"+modal+'_'+frecuencia+'_'+fila).value;
			var valor2 = document.getElementById("valor2_"+modal+'_'+frecuencia+'_'+fila).value;
			var valor3 = document.getElementById('valor3_'+modal+'_'+frecuencia+'_'+fila).value;
			
			var logrado = (valor1/valor2)*valor3;
		}
		

		
		var campo_logrado = document.getElementById("logrado_"+modal+"_"+frecuencia+"_"+fila);

		campo_logrado.innerHTML = logrado;
		
	}
</script>
<script src="/js/chart.js"></script>
<script>
function graficar(modal){

	var metodo = document.getElementById("metodo_calculo_"+modal).value;
	var frecuencia = document.getElementById("frecuencia_medicion_reporte_"+modal).value;
	var data
	if(modal == 6){
			if(frecuencia == 1){
				
				data = {
					labels: ["Año"],
					datasets: [
					{
						label: '# de Accidentes',
						data: [0],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
						],
						borderWidth: 1
					}
					]
					
					};


			}else if(frecuencia == 2){
				
				data = {
					labels: ["Semestre 1", "Semestre 2"],
					datasets: [
					{
						label: '# de Accidentes',
						data: [0,0],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
						],
						borderWidth: 1
					},
					
					]
					
					};

			}else if(frecuencia == 4){
				data = {
					labels: ["Trimestre 1", "Trimestre 2", "Trimestre 3", "Trimestre 4"],
					datasets: [
					{
						label: '# de Accidentes',
						data: [0,0,0,0],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
                			'rgba(75, 192, 192, 0.2)',
						],
						borderWidth: 1
					},
					
					]
					
					};
			}
		}else if(modal == 7){
			if(frecuencia == 1){
				
				data = {
					labels: ["Año"],
					datasets: [
					{
						label: '# de Enfermedades',
						data: [0],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
						],
						borderWidth: 1
					}
					]
					
					};


			}else if(frecuencia == 2){
				
				data = {
					labels: ["Semestre 1", "Semestre 2"],
					datasets: [
					{
						label: '# de Enfermedades',
						data: [0,0],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
						],
						borderWidth: 1
					},
					
					]
					
					};

			}else if(frecuencia == 4){
				data = {
					labels: ["Trimestre 1", "Trimestre 2", "Trimestre 3", "Trimestre 4"],
					datasets: [
					{
						label: '# de Enfermedades',
						data: [0,0,0,0],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
                			'rgba(75, 192, 192, 0.2)',
						],
						borderWidth: 1
					},
					
					]
					
					};
			}
		}else{
			
				
				
				var meta = [];
				var logrado = [];

				for (i = 0; i < frecuencia; i++) { 
					meta.push(document.getElementById("meta_"+modal+"_"+frecuencia+"_"+i).value);
					logrado.push(document.getElementById("logrado_"+modal+"_"+frecuencia+"_"+i).innerHTML);
					
				}
				console.log(logrado);
				var labels;
				if(frecuencia == 1){
					labels = ["Año"];
				}else if(frecuencia == 2){
					labels = ["Semestre 1", "Semestre 2"];
				}else{
					labels = ["Trimestre 1", "Trimestre 2", "Trimestre 3", "Trimestre 4"];
				}

				var numerador = 'Meta';
				var denominador = 'Logrado';
				

				backgroundColor = ['rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)']

				data = {
					labels: labels,
					datasets: [
					{
						label: numerador,
						data: meta,
						backgroundColor: backgroundColor,
						borderWidth: 1
					},
					{
						label: denominador,
						data: logrado,
						backgroundColor: backgroundColor,
						borderWidth: 1
					}
					]
					
					};

					
			}
		
var td = document.getElementById("espgrafico_"+modal);

td.innerHTML = '<canvas id="grafica'+modal+'" width="400" height="150"></canvas>';
var ctx = document.getElementById("grafica"+modal);

var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
}
</script> 
</body>