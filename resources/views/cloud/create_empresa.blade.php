@extends('layouts.app')

@section('content')



<head>
	<title>SOFTWARE XESTION3</title>
	<link href="/css/style1.css" rel="stylesheet" type="text/css"/>
	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="riesgos profesionales, riesgos laborales" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->
	<script src="js/jquery.min.js"></script>
	
</head>
<body>
<a href="/cloud/form/l1">Inicio</a> / <a href="#">Crear Empresa</a>
	<div class="main-content">
		<div class="form">
			<div class="sap_tabs">	
				
					<div class="facts">
						<div class="register">
							@if (Session::get('message'))
								<div class="alert alert-success">
									{{Session::get('message')}}
									<br><br>            
								</div>
								@endif
								<form method="POST" action="{{ url('/cloud/create_empresa') }}" enctype="multipart/form-data">
									{{ csrf_field() }}
									<h3>NOMBRE:</h3>					
									<input placeholder="Nombre" id="name" type="text" name="nombre_empresa" value="{{ old('nombre_empresa') }}" required autofocus>
									@if ($errors->has('nombre_empresa'))
									<span class="help-block">
										<strong>{{ $errors->first('nombre_empresa') }}</strong>
									</span>
									@endif
									<h3>LOGO:</h3>
									<input type="file" name="file" value="{{ old('file') }}" required/>	
									@if ($errors->has('logo'))
									<span class="help-block">
										<strong>{{ $errors->first('logo') }}</strong>
									</span>
									@endif
									
									<div class="sign-up">
										<input type="submit" value="Crear"/>
									</div>
								</form>
							</div>
						</div>
						
			</div>
		</div>
	</div>
</body>

@endsection
