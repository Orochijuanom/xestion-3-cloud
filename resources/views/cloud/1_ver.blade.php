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
<form method="POST" action="{{ url('/cloud/form/1') }}">
{{ csrf_field() }}

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
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=3 rowspan=3 height="94" align="center" valign=middle><b><img style="width:200px; heigth:200px;" src="/images/{{$t1->empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 rowspan=2 align="center" valign=middle><b>{{$t1->empresa->nombre_empresa}}<input type="hidden" value="{{$t1->empresa->id}}" name="empresa_id" /></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b> Código:<input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" value="{{$t1->codigo}}" ></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b>Versión:<input class="codigo" placeholder="version" type="text" required name="version" value="{{$t1->version}}">   </b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=middle><b>OBJETIVOS DEL SISTEMA DE GESTION  </b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b>Fecha:<input class="codigo" placeholder="fecha" type="date" required name="fecha" value="{{$t1->fecha}}"></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=11 height="26" align="center" valign=middle bgcolor="#50b308"><b><font size=3><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="73" align="center" valign=middle bgcolor="#50b308"><b><font size=1>POLITICA DEL SISTEMA DE GESTION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=1>AREA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1>OBJETIVO </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1>NOMBRE DEL INDICADOR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1>UNIDAD  DE MEDIDA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1>FRECUENCIA DE ANALISIS</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1>METODO DE CALCULO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1>META</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1>NÚMERO DEL INDICADOR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1>RESPONSABLES</font></b></td>
	</tr>
	@foreach($t1->T1Detalles as $detalle)
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="73" align="justify" valign=middle><font size=1><textarea class="campo" placeholder=""  name="politica_sistema_gestion[]">{{$detalle->politica_sistema_gestion}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><font size=1><textarea class="campo" placeholder=""  name="area[]">{{$detalle->area}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=middle><font size=1><textarea class="campo" placeholder=""  name="objetivo[]">{{$detalle->objetivo}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font size=1><textarea class="campo" placeholder=""  name="nombre_indicador[]">{{$detalle->nombre_indicador}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size=1><textarea class="campo" placeholder=""  name="unidad_medida[]">{{$detalle->unidad_medida}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size=1><textarea class="campo" placeholder=""  name="frecuencia_analisis[]">{{$detalle->frecuencia_analisis}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify" valign=middle bgcolor="#FFFFFF"><font size=1><textarea class="campo" placeholder=""  name="metodo_calculo[]">{{$detalle->metodo_calculo}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;0%"><font size=1><textarea class="campo" placeholder=""  name="meta[]">{{$detalle->meta}}</textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;@">
		<font size=1>
			<select id="cargo" class="form-control" name="numero_indicador[]">
				@foreach ($t11s as $t11)
					@foreach($t11->T11Detalle as $detalle)
						<option value="{{$t11->id}}">{{$detalle->numero_indicador}} - {{$detalle->nombre_indicador}}</option>
					@endforeach	
				@endforeach
			</select>
		<br></font>
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><font size=1><textarea class="campo" placeholder=""  name="responsable[]">{{$detalle->responsable}}</textarea><br></font></td>
	</tr>
	@endforeach
	
</table>

<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()">
</form> 									    
</body>