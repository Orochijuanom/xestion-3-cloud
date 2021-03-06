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
<a href="/cloud/form/l1">Inicio</a> / <a href="/cloud/form/t9/{{$empresa->id}}">t9</a> / <a href="#">Agregar t9</a>
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

<form method="POST" action="{{ url('/cloud/form/9') }}">
{{ csrf_field() }}

<table cellspacing="0" border="0">
	<colgroup width="19"></colgroup>
	<colgroup width="40"></colgroup>
	<colgroup width="332"></colgroup>
	<colgroup width="100"></colgroup>
	<colgroup width="110"></colgroup>
	<colgroup width="100"></colgroup>
	<colgroup width="80"></colgroup>
	<colgroup width="92"></colgroup>
	<colgroup width="113"></colgroup>
	<colgroup width="111"></colgroup>
	<colgroup width="120"></colgroup>
	<colgroup width="115"></colgroup>
	<colgroup span="2" width="108"></colgroup>
	<colgroup width="142"></colgroup>
	<colgroup width="152"></colgroup>
	<colgroup width="142"></colgroup>
	<colgroup width="166"></colgroup>
	<colgroup width="90"></colgroup>
	<colgroup width="96"></colgroup>
	<colgroup span="2" width="83"></colgroup>
	<colgroup width="93"></colgroup>
	<colgroup span="2" width="113"></colgroup>
	<colgroup span="2" width="98"></colgroup>
	<colgroup width="174"></colgroup>
	<colgroup width="19"></colgroup>
	<colgroup width="85"></colgroup>
	<tr>
		<td height="21" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 rowspan=3 align="left" valign=middle><b><font face="Arial"><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=24 rowspan=2 align="center" valign=middle><b><font face="Arial">{{$empresa->nombre_empresa}}<input type="hidden" value="{{$empresa->id}}" name="empresa_id" /></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">3.1 Codigo:<input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" /></font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">3.2 Versión:<input class="codigo" placeholder="version" type="text" required name="version"></font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="37" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=24 align="center" valign=middle><b><font face="Arial">4. PROFESIOGRAMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font face="Arial">3.3 Fecha:<input class="codigo" placeholder="fecha" type="date" required name="fecha"/> </font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="25" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="center" valign=top><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle><b><font face="Arial"> (I) Ingreso - Pre-empleo -    (P) Periódica - Anual    -     (E) Egreso (R) Reubicación ( PI) Pos incapacidad</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=4><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font face="Arial"><br></font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="19" align="left" valign=bottom><font face="Arial" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#C9C9C9"><b><font face="Arial">ITEM</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#C9C9C9"><b><font face="Arial">CARGO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" valign=middle bgcolor="#C9C9C9"><b><font face="Arial" color="#000000">Énfasis Evaluación Médica</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#C9C9C9"><b><font face="Arial" color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=middle bgcolor="#C9C9C9"><b><font face="Arial" color="#000000">Pruebas Complementarias</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#C9C9C9"><b><font face="Arial" color="#000000">Laboratorios</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=5 align="center" valign=middle bgcolor="#C9C9C9"><b><font face="Arial" color="#000000">Vacunas</font></b></td>
		<td align="left" valign=bottom><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Arial" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="52" align="center" valign=bottom><b><font face="Arial" color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#C5E0B4"><b><font face="Arial" color="#000000">Musculo esquelético </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#C5E0B4"><b><font face="Arial" color="#000000">Dermatologico</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#C5E0B4"><b><font face="Arial" color="#000000">Respiratorio</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#C5E0B4"><b><font face="Arial" color="#000000">Cardio Vascular </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#C5E0B4"><b><font face="Arial" color="#000000">Trabajo en alturas</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#C5E0B4"><b><font face="Arial" color="#000000">Test de fobias (trabajo en alturas)</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#C5E0B4"><b><font face="Arial" color="#000000">otro</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#E2F0D9"><b><font face="Arial" color="#000000">Espirometria</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#E2F0D9"><b><font face="Arial" color="#000000">Audiometría</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#E2F0D9"><b><font face="Arial" color="#000000">Optometria</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#E2F0D9"><b><font face="Arial" color="#000000">Visiometria</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#E2F0D9"><b><font face="Arial" color="#000000">Electrocardiograma</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#E2F0D9"><b><font face="Arial" color="#000000">Examen Coordinación motriz</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#E2F0D9"><b><font face="Arial" color="#000000">Examen de Psicologia</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#E2F0D9"><b><font face="Arial" color="#000000">Otro</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FBE5D6"><b><font face="Arial" color="#000000">Cuadro Hematico</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FBE5D6"><b><font face="Arial" color="#000000">Glicemia pre y pos</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FBE5D6"><b><font face="Arial" color="#000000">Perfil lipidico</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FBE5D6"><b><font face="Arial" color="#000000">Parcial de Orina</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FBE5D6"><b><font face="Arial" color="#000000">Otro</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">Tetanos (TD)</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">Fiebre Amarilla</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">Hepatitis B</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">Antirrabica</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFCC"><b><font face="Arial" color="#000000">Otra</font></b></td>
		<td align="center" valign=bottom><b><font face="Arial" color="#000000"><br></font></b></td>
		<td align="center" valign=bottom><b><font face="Arial" color="#000000"><br></font></b></td>
	</tr>

	@for($i=0; $i<=10; $i++)
	<tr>
		<td height="19" align="left" valign=middle bgcolor="#FFFFFF"><font face="Arial" color="#000000">
		<br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="1" sdnum="1033;"><b><font face="Arial" color="#000000">{{$i}}</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font face="Arial" color="#000000">
		<select name="cargo_id[]" required>
			@foreach($cargos as $cargo)
				<option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
			@endforeach			
		</select>
		<br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="musculo_esquletico[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="dermatologico[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="respiratorio[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="cardio_vascular[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="trabajo_en_alturas[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="test_de_fobias[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="otro[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="espirometria[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="audiometria[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="optometria[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="visiometria[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="electrocardiograma[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="examen_coordinacion_motriz[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="examen_de_psicologia[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="otro1[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="cuadro_hematico[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="glicemia_pre_y_pos[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="perfil_lipidico[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="parcial_de_orina[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="otro2[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="tetanos_td[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="fiebre_amarilla[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="hepatitis_b[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="antirrabica[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial"><textarea class="campo" placeholder=""  name="otra3[]"></textarea><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
	</tr>
	@endfor


	<tr>
		<td height="55" align="left" valign=middle><font face="Arial" color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=27 align="left" valign=top><b><font face="Arial" color="#000000">Aclaraciones profesiograma:</font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=10 align="center" valign=bottom bgcolor="#50b308"><b><font color="#000000">ESQUEMA DE VACUNACION</font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#50b308"><b><font color="#000000">Vacuna</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#50b308"><b><font color="#000000">Nro dosis</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="center" valign=bottom bgcolor="#50b308"><b><font color="#000000">APLICACIÓN DE VACUNAS</font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="30" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" color="#000000">Fiebre amarilla</font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><font face="Arial" color="#000000">1</font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle><font face="Arial" color="#000000">Una sola dosis</font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font face="Century Gothic"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="94" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Century Gothic" color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><b><font face="Arial" color="#000000">Hepatitis B</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="3" sdnum="1033;"><font face="Arial" color="#000000">3</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle><font face="Arial" color="#000000">Primera dosis<br>Segunda dosis: 30 dias despues de la primera dosis<br>Tercera dosis: Seis meses despues de la segunda dosis.<br>Refuerzo: 1 año.</font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="124" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Century Gothic" color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" color="#000000">Tetanos (TD) Mujeres embarazadas</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="5" sdnum="1033;"><font face="Arial" color="#000000">5</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle><font face="Arial" color="#000000">Primera dosis<br>Segunda dosis: 30 dias despues de la primera dosis<br>Tercera dosis: Seis meses despues de la segunda dosis.<br>Cuarta dosis: Un año despues de la tercera dosis. <br>Quinta dosis: Un año despues de la cuarta dosis<br> Refuerzo: cada 10 años</font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="40" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Century Gothic" color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" color="#000000">Tetanos (TD) Hombres</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="3" sdnum="1033;"><font face="Arial" color="#000000">3</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="40" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" color="#000000">Antirrabica</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="3" sdnum="1033;"><font face="Arial" color="#000000">3</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=7 align="left" valign=middle bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Arial" color="#000000"><br></font></td>
	</tr>
</table>
<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
</form>
</body>
@endsection