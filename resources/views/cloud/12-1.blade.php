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
<form method="POST" action="{{ url('/cloud/form/12-1') }}">
{{ csrf_field() }}


<table cellspacing="0" border="0">
	<colgroup width="234"></colgroup>
	<colgroup width="236"></colgroup>
	<colgroup width="223"></colgroup>
	<colgroup width="81"></colgroup>
	<colgroup width="78"></colgroup>
	<colgroup width="86"></colgroup>
	<colgroup width="92"></colgroup>
	<colgroup width="94"></colgroup>
	<colgroup width="81"></colgroup>
	<colgroup width="78"></colgroup>
	<colgroup width="86"></colgroup>
	<colgroup width="92"></colgroup>
	<colgroup width="94"></colgroup>
	<colgroup width="63"></colgroup>
	<colgroup width="45"></colgroup>
	<colgroup width="85"></colgroup>
	<colgroup width="67"></colgroup>
	<colgroup width="99"></colgroup>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" colspan=1 rowspan=3 height="127" align="center" valign=middle><b><img style="width:200px; heigth:200px;" src="/images/{{$empresa->logo}}" /></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 rowspan=2 align="center" valign=middle><b>{{$empresa->nombre_empresa}}<input type="hidden" value="{{$empresa->id}}" name="empresa_id" /><br></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>P</b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>E</b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>N </b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><b>Código: <input class="codigo" placeholder="codigo" type="text" required name="codigo" ></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#FFFF00"><b><br></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#00CCFF"><b> </b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#FF0000"><b><br></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><b>Versión: <input class="codigo" placeholder="version" type="text" required name="version"></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="center" valign=middle><b>FICHA DE CAPACITACIONES POR PERSONA</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><b>Fecha: <input class="codigo" placeholder="fecha" type="date" required name="fecha" ></b></td>
		</tr>
	<tr>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 colspan=3 align="center" valign=middle bgcolor="#50b308"><b>APELLIDOS Y NOMBRES</b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=15 align="center" valign=middle bgcolor="#50b308"><b>CAPACITACIONES</b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=15 align="center" valign=middle bgcolor="#50b308"><b>
			<select id="cargo" class="form-control" name="t12_id" required>
				@foreach ($t12s as $t12)
					@foreach($t12->t12Detalles as $detalle)
						<option value="{{$t12->id}}">{{$detalle->capacitacion}}</option>
					@endforeach	
				@endforeach
			</select>
		</b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" colspan=3 valign=middle bgcolor="#50b308"><b>P</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" colspan=3 valign=middle bgcolor="#50b308"><b>E</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" colspan=3 valign=middle bgcolor="#50b308"><b>PUNTAJE OBJETNIDO</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" colspan=3 valign=middle bgcolor="#50b308"><b>PUNTAJE POSIBLE</b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" colspan=3 valign=middle bgcolor="#50b308"><b>EFECTIVIDAD</b></td>
	</tr>
	@for($i=0; $i < 11; $i++)
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" colspan=3 bgcolor="#FFFFFF">
			<select id="cargo" class="form-control" name="apellidos_nombres[]" required>
				@foreach ($empleados as $empleado)
					<option value="{{$empleado->id}}">{{$empleado->nombre_apellidos}} - {{$empleado->cedula}} - {{$empleado->cargos->cargo}}</option>
				@endforeach
			</select>
		<br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" colspan=3 valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><input class="codigo" placeholder="fecha" type="date" required name="p[]"  value="{{date('Y-m-d')}}"><br></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" colspan=3 valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><textarea class="campo" placeholder=""  name="e[]"></textarea><br></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" colspan=3 valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder=""  name="puntaje_obtenido[]"></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" colspan=3 valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder=""  name="puntaje_posible[]"></textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" colspan=3 valign=middle bgcolor="#FFFFFF"><br></td>
	</tr>
	@endfor

</table>
<!-- ************************************************************************** -->

<div class="sign-up"><input type="submit" value="Nuevo"/></div>
<input type="button" value="Imprime esta 
pagina" onclick="window.print()"> 
<!-- ************************************************************************** -->
 <script>
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
@endsection