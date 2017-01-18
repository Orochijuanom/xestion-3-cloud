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
<a href="/cloud/form/l1">Inicio</a> / <a href="/cloud/form/t7/{{$empresa->id}}">t7</a> / <a href="#">Agregar t7</a>
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

<form method="POST" action="{{ url('/cloud/form/7') }}">
{{ csrf_field() }}

<table cellspacing="0" border="0">
	<colgroup width="85"></colgroup>
	<colgroup width="333"></colgroup>
	<colgroup width="275"></colgroup>
	<colgroup width="246"></colgroup>
	<colgroup width="235"></colgroup>
	<colgroup width="239"></colgroup>
	<colgroup width="218"></colgroup>
	<colgroup width="269"></colgroup>
	<tr>
		<td height="33" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font face="Arial" size=3 color="#000000"><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 rowspan=2 align="center" valign=middle><b><font face="Arial" size=3 color="#000000">{{$empresa->nombre_empresa}}<input type="hidden" value="{{$empresa->id}}" name="empresa_id" /></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle sdnum="1033;1033;[$-409]D-MMM-YY;@"><b><font face="Arial" size=3>3.1 Codigo:<input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" /></font></b></td>
	</tr>
	<tr>
		<td height="35" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b><font face="Arial" size=3>3.2 Version: <input class="codigo" placeholder="version" type="text" required name="version"></font></b></td>
	</tr>
	<tr>
		<td height="42" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font face="Arial" size=3 color="#000000">4. MATRIZ DE SEGUMIENTO A COMITES</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b><font face="Arial" size=3>3.3 Fecha:<input class="codigo" placeholder="fecha" type="date" required name="fecha"> </font></b></td>
	</tr>
	<tr>
		<td height="42" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=7 align="center" valign=middle><font face="Arial" size=3 color="#000000"><br></font></td>
		</tr>
	<tr>
		<td height="43" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=7 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000"> DATOS DE REUNION Y COMPROMISOS</font></b></td>
		</tr>
	<tr>
		<td height="42" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000">COMITE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000">SEDE / PROYECTO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000">FECHA REUNION DE COMITÉ</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000">COMPROMISOS ADQUIRIDOS (MATRIZ ACAP)</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000"> 6.2  FECHA PROXIMA REUNION (DD/MM/AA) </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000">6.4 EVIDENCIA REUNION</font></b></td>
	</tr>
	<tr>
		<td height="60" align="left" bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000">ABIERTOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3 color="#000000">CERRADOS</font></b></td>
		</tr>
	@for($i = 0; $i <= 5; $i++)	
	<tr>
		<td style="border-right: 3px double #000000" height="33" align="left" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><textarea class="campo" placeholder=""  name="comite[]"></textarea><br></font></td>

		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><textarea class="campo" placeholder=""  name="sede_proyecto[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><input class="codigo" placeholder="fecha" type="date" required name="fecha_reunion_comite[]" value="{{ date('Y-m-d') }}"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><textarea class="campo" placeholder=""  name="abiertos[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><textarea class="campo" placeholder=""  name="cerrados[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=middle bgcolor="#FFFFFF"><font face="Arial" size=3 color="#000000"><input class="codigo" placeholder="fecha" type="date" required name="fecha_prox_reunion[]" value="{{ date('Y-m-d') }}"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font face="Arial" size=3 color="#000000"><input type="file" class="campo" placeholder=""  name="evidencia_reunion[]" /><br></font></td>
	</tr>	
	@endfor
</table>
<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
</form>
</body>
@endsection