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
<form method="POST" action="/cloud/form/12/{{$t12->id}}">
{{ csrf_field() }}
{{ method_field('PUT') }}
<table cellspacing="0" border="0">
	<colgroup width="293"></colgroup>
	<colgroup width="374"></colgroup>
	<colgroup width="406"></colgroup>
	<colgroup span="2" width="198"></colgroup>
	<colgroup width="326"></colgroup>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 3px double #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=3 height="113" align="center" valign=middle><img style="width:200px; heigth:200px;" src="/images/{{$t12->empresa->logo}}" />
        <br />
        <output id="list"></output></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle><b><font size=3>{{$t12->empresa->nombre_empresa}}<input type="hidden" value="{{$t12->id}}" name="empresa_id" /></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=middle><b><font size=3><br></font></b></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b><font size=3>Código: <input class="codigo" placeholder="ingrese el codigo" type="text" required name="codigo" value="{{$t12->codigo}}"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=middle><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b><font size=3>Versión: <input class="codigo" placeholder="version" type="text" required name="version" value="{{$t12->version}}"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><b><font size=3>FICHA TECNICA DE CAPACITACIONES</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000" align="center" valign=middle><b><font size=3><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 3px double #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle><b><font size=3>Fecha:<input class="codigo" placeholder="fecha" type="date" required name="fecha" value="{{$t12->fecha}}"></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" height="13" align="center"><font size=1><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=1><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font size=1><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center"><font size=1><br></font></td>
		<td style="border-top: 3px double #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left"><font size=1><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=2 height="74" align="center" valign=middle bgcolor="#50b308"><b><font size=1>CAPACITACION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b><font size=1><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=1>TEMAS DE LA CAPACITACION</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 colspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=1>RESPONSABLE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" rowspan=2 align="center" valign=middle bgcolor="#50b308"><b><font size=1>CARGOS</font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#50b308"><b>OBJETIVO</b></td>
	</tr>
	@foreach($t12->t12Detalles as $t12Detalle)
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 3px double #000000; border-right: 1px solid #000000" rowspan=8 height="214" align="center" valign=middle bgcolor="#FFFFFF"><textarea class="campo" placeholder=""  name="capacitacion[]">{{$t12Detalle->capacitacion}}</textarea><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=1><textarea class="campo" placeholder=""  name="objetivo[]">{{$t12Detalle->objetivo}}</textarea><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=8 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=1><textarea class="campo" placeholder=""  name="temas_capacitacion[]">{{$t12Detalle->temas_capacitacion}}</textarea><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=8 colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=1><textarea class="campo" placeholder=""  name="responsable[]">{{$t12Detalle->responsable}}</textarea><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b>
            <select id="cargo" class="form-control" name="cargo[{{$loop->index}}][]">
				@foreach ($cargos as $cargo)
                    
                    @if($t12Detalle->T12Cargos[0]->cargo_id == $cargo->id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                    @endif
					
				@endforeach
			</select>		
		<br></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b>
			<select id="cargo" class="form-control" name="cargo[{{$loop->index}}][]">
				@if($t12Detalle->T12Cargos[1]->cargo_id == $cargo->id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                    @endif
			</select>
		<br></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b>
			<select id="cargo" class="form-control" name="cargo[{{$loop->index}}][]">
				@if($t12Detalle->T12Cargos[2]->cargo_id == $cargo->id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                    @endif
			</select>
		<br></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" valign=middle bgcolor="#FFFFFF"><b>
			<select id="cargo" class="form-control" name="cargo[{{$loop->index}}][]">
				@if($t12Detalle->T12Cargos[3]->cargo_id == $cargo->id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                    @endif
			</select>
		<br></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" bgcolor="#FFFFFF"><font size=1>
			<select id="cargo" class="form-control" name="cargo[{{$loop->index}}][]">
				@if($t12Detalle->T12Cargos[4]->cargo_id == $cargo->id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                    @endif
			</select>
		<br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" bgcolor="#FFFFFF"><font size=1>
			<select id="cargo" class="form-control" name="cargo[{{$loop->index}}][]">
				@if($t12Detalle->T12Cargos[5]->cargo_id == $cargo->id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                    @endif
			</select>
		<br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" bgcolor="#FFFFFF"><font size=1>
			<select id="cargo" class="form-control" name="cargo[{{$loop->index}}][]">
				@if($t12Detalle->T12Cargos[6]->cargo_id == $cargo->id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                    @endif
			</select>
		<br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 3px double #000000" align="left" bgcolor="#FFFFFF"><font size=1>
			<select id="cargo" class="form-control" name="cargo[{{$loop->index}}][]">
				@if($t12Detalle->T12Cargos[7]->cargo_id == $cargo->id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->cargo}}</option>
                    @endif
			</select>
		<br></font></td>
	</tr>
	@endforeach
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
