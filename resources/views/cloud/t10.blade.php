@extends('layouts.app')

@section('content')

<head>
    <link href="/css/programa.css" rel="stylesheet" type="text/css"/><style>
          .thumb {
			  width: 100%;
            height: 100%;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>LISTADO MAESTRO DE DOCUMENTOS Y CONTROL DE REGISTROS</title>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial"; font-size:x-small }
	</style>
	
</head>

<body>
<a href="/cloud/form/l1">Inicio</a> / <a href="#">t10</a>
<br/><br/><br/>

<table cellspacing="0" border="0">
	<colgroup width="217"></colgroup>
	<colgroup width="85"></colgroup>
	<colgroup width="53"></colgroup>
	<colgroup width="78"></colgroup>
	<colgroup width="101"></colgroup>
	<colgroup width="98"></colgroup>
	<colgroup width="135"></colgroup>
	<colgroup width="163"></colgroup>
	<colgroup width="51"></colgroup>
	<colgroup width="111"></colgroup>
	<colgroup width="190"></colgroup>
		
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="73" align="center" valign=middle bgcolor="#50b308"><b><font size=1>CODIGO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=1>VERSION</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=1>FECHA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=1>EXPORTAR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=1></font></b></td>
        
		
	</tr>
	@foreach($t10s as $t10)	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="73" align="justify" valign=middle><font size=1>{{$t10->codigo}}<br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><font size=1>{{$t10->version}}<br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><font size=1>{{$t10->fecha}}<br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><font size=1><a href="/cloud/reporte/t10/{{$t10->id}}">Exportar</a></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><font size=1><div class="sign-up"><a href="/cloud/form/10/ver/{{$t10->id}}"/>Ver</a></div><br></font></td>				
	</tr>
	@endforeach
	
</table>
<div class="sign-up"><a href="/cloud/form/10/{{$empresa_id}}"/>Nuevo</a></div>

<input type="button" value="Imprime esta pagina" onclick="window.print()">

</body>
@endsection