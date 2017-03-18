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
	<title>objetivos y programas de gestión HSE</title>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial"; }
	</style>
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>	
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>
	<colgroup width="50"></colgroup>	
	<colgroup width="50"></colgroup>
		
	<tr style="color: white;">
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="73" align="center" valign=middle bgcolor="#50b308"><b><font>LOGO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle bgcolor="#50b308"><b><font>EMPRESA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >CARGOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >EMPLEADOS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >FICHA TECNICA DE INDICADORES</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font >OBJETIVOS DEL SISTEMA DE GESTION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font >PRESUPUESTO DEL SISTEMA DE GESTION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font >MATRIZ DE REQUISITOS LEGALES Y DE OTRA INDOLE APLICABLES A LA EMPRESA</font></b></td>		
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font >MATRIZ DE PELIGROS, EVALUACIÓN, VALORACIÓN DE RIESGOS Y DETERMINACIÓN DE CONTROLES</font></b></td>			
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font >MATRIZ PROGRAMA DE GESTION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font >MATRIZ DE ELEMENTOS DE PROTECCION PERSONAL</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font >MATRIZ DE SEGUIMIENTO DE ACCIONES CORRECTIVAS Y PREVENTIVAS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >MATRIZ DE SEGUMIENTO A COMITES</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >MATRIZ EXAMENES MEDICOS OCUPACIONALES</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >PROFESIOGRAMA</font></b></td>		
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >LISTADO MAESTRO DE DOCUMENTOS Y CONTROL DE REGISTROS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >FICHA TECNICA DE CAPACITACIONES</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font >FICHA DE CAPACITACIONES POR PERSONA</font></b></td>
	</tr>
	@foreach($empresas as $empresa)	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="73" align="justify" valign=middle><font><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" /><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="left" valign=middle><font >{{$empresa->nombre_empresa}}<br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/tcargo/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t13/{{$empresa->id}}">Ir</a><br></font></td>	
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t11/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t1/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t2/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t3/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t4/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t44/{{$empresa->id}}">Ir</a><br></font></td>		
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t5/{{$empresa->id}}">Ir</a><br></font></td>	
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t6/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t7/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t8/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t9/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t10/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t12/{{$empresa->id}}">Ir</a><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font ><a href="/cloud/form/t12-1/{{$empresa->id}}">Ir</a><br></font></td>	
	</tr>
	@endforeach
	
</table>
<div class="sign-up"><a href="{{url('/cloud/create_empresa')}}"/>Nuevo</a></div>
<input type="button" value="Imprime esta pagina" onclick="window.print()">

</body>
@endsection