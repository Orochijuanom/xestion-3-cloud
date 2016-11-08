<head>
	<title>SOFTWARE XESTION3</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css"/>

	
	
	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="riesgos profesionales, riesgos laborales" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

	<script src="js/jquery.min.js"></script>
	
</head>
<body>
<a href="http://xestion3.com.co"><img class="logx" src="images/header-logo.png" width="30%" height="auto"> </a>
	<div class="main-content">
		<div class="form">
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><a href="/register"><span>REGISTRARSE</span></a></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><a href="/login"><span>INGRESAR</span></a></li>
				    </ul>		
		            <div class="" aria-labelledby="tab_item-0">
				        <div class="facts">
		                    <div class="register">
                                @if (Session::get('message'))
                                    <div class="alert alert-success">
                                        {{Session::get('message')}}
                                        <br><br>            
                                    </div>
                                @endif
						        <form method="POST" action="{{ url('/register') }}">
							        {{ csrf_field() }}
                                    <h3>NOMBRE:</h3>					
							        <input placeholder="Nombre" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
							        @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                    <h3>CORREO:</h3>
							        <input placeholder="Dirección de correo" id="email" type="email" name="email" value="{{ old('email') }}" required>	
							        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <h3>CONTRASEÑA:</h3>							
							        <input placeholder="Contraseña" id="password" type="password" name="password" required>	
							        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <h3>CONFIRMAR CONTRASEÑA:</h3>
							        <input placeholder="Confirmar Contraseña" id="password-confirm" type="password" name="password_confirmation" required>
							        <div class="sign-up">
									    <input type="submit" value="Crear Cuenta"/>
								    </div>
						        </form>
					        </div>
				        </div>
			        </div>	

			        		        					            	      
			 	</div>	
		    </div>
        </div>
	</div>
</body>


