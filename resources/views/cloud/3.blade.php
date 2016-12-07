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
<form method="POST" action="{{ url('/cloud/form/3') }}">
{{ csrf_field() }}

<table align="left" cellspacing="0" border="0">
	<colgroup width="215"></colgroup>
	<colgroup width="137"></colgroup>
	<colgroup width="117"></colgroup>
	<colgroup width="107"></colgroup>
	<colgroup width="331"></colgroup>
	<colgroup width="196"></colgroup>
	<colgroup width="120"></colgroup>
	<colgroup width="106"></colgroup>
	<colgroup width="131"></colgroup>
	<colgroup width="261"></colgroup>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=3 height="61" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3><b>{{$empresa->nombre_empresa}} <input type="hidden" value="{{$empresa->id}}" name="empresa_id" /></b></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">Código:<input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" />  </font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial">Versión:<input class="codigo" placeholder="version" type="text" required name="version"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3>MATRIZ DE  REQUISITOS LEGALES Y DE OTRA INDOLE APLICABLES A LA EMPRESA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"> Fecha:<input class="codigo" placeholder="fecha" type="date" required name="fecha"> </font></b></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=11 height="20" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 height="41" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3>Fecha de actualización</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3>Motivo actualización</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3>Responsable de elaboración y/o actualización</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial" size=3>Revisado por</font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3><input class="campo" placeholder="fecha" type="date" required name="fecha_actualizacion"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3><textarea class="campo" placeholder=""  name="motivo_actualizacion"></textarea><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3>
		<select id="cargo" class="form-control" name="responsable_actualizacion">
			@foreach ($empleados as $empleado)
				<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
			@endforeach
		</select>
		<br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Arial" size=3>
		<select id="cargo" class="form-control" name="revisado_por">
			@foreach ($empleados as $empleado)
				<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
			@endforeach
		</select>
		<br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 3px double #000000" colspan=11 height="19" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Arial"><br></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 height="39" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;@"><b><font face="Arial">NORMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="39" align="center" valign=middle bgcolor="#50b308" sdnum="1033;0;@"><b><font face="Arial">NÚMERO NORMA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">FECHA DE PUBLICACIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">EMISOR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">ARTICULO</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">DESCRIPCIÓN DE LA OBLIGACIÓN</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Arial">PALABRA CLAVE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">APLICA</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">CUMPLE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">COMO SE CUMPLE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font face="Albertus Medium">RESPONSABLE DEL CUMPLIMIENTO</font></b></td>
	</tr>
	<tr>
	</tr>
	@for($i=0; $i < 11; $i++)
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="37" align="left" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="norma[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="37" align="left" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="numero_norma[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="fecha_publicacion[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="emisor[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="articulo[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify"><font face="Arial"><textarea class="campo" placeholder=""  name="descripcion_obligacion[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="justify"><font face="Arial"><textarea class="campo" placeholder=""  name="palabra_clave[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=6 color="#FF0000">
		<select id="aplica_{{$i}}" style="background:green;" name="aplica[]" onchange="cambiar_color(this.id)">
			<option value="1">1</option>
			<option value="0">0</option>
		</select>
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial" size=6 color="#7C7C7C">
		<select id="cumple_{{$i}}" name="cumple[]" style="background:green;" onchange="cambiar_color(this.id)">
			<option value="1" style="background-color: green">1</option>
			<option value="0" style="background-color: red">0</option>
		</select>
		</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font face="Arial"><textarea class="campo" placeholder=""  name="como_cumple[]"></textarea><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><font face="Arial">
		<select id="cargo" class="form-control" name="responsable_cumplimiento[]">
			@foreach ($empleados as $empleado)
				<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cargos->cargo}}</option>
			@endforeach
		</select>
		<br></font></td>
	</tr>
	@endfor
	

</table>
	<div class="sign-up"><input type="submit" value="Guardar"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
</form>
<script>
	function cambiar_color(combo)
	{
		var c = document.getElementById(combo);
		if (c.value==1)
			c.style.background = "green";
		else
			c.style.background = "red";
		
		console.log(c);
	}
</script>
<!-- ************************************************************************** -->
 
</body>
