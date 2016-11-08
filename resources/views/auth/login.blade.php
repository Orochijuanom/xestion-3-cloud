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
		            	

			        <div class="" aria-labelledby="tab_item-1">
				        <div class="facts">
					        <div class="register">
						         <form  role="form" method="POST" action="{{ url('/login') }}">
                                 {{ csrf_field() }}
							        <h3>CORREO:</h3>						
							        <input placeholder="Dirección de correo" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
							        <h3>CONTRASEÑA:</h3>							
							        <input placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required/>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif										
							        <div class="sign-up">
								        <input type="submit" value="Ingresar"/>
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