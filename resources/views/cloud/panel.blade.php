<head>
    <meta charset="utf-8">
    <title>SOFTWARE XESTION3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Fernando mejia">

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<h1 class="span">SOFTWARE XESTIONS3 ®</h1>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			@if(Auth::user()->admin == 1)
				<li class=""><a href="/cloud/admin">ADMINISTRADOR XESTION3</a></li>
			@endif
		
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
        <li><a href="">Bienvenido <strong>{{Auth::user()->name}}</strong> </a></li>
			  <li>
            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Estado</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Procesos</h4>
		<div class="row-fluid">
		




				<table border='1'; class='table table-hover';>
					<tr class='warning'>
						<td>Proceso</td>
                        <td>ver</td>
						<td>Estado</td>
					</tr>
			  
			
				  	<tr class='success'>
                        <td>{{Auth::user()->celular}}</td>
						<td><a href="{{Auth::user()->ver}}" target='_blank'>De clic aqui para ver su proceso</a></td>
				    	<td>{{Auth::user()->estado}}</td>
                
						
					</tr>
				

				</table>
		
						
			
				  
			  			  
			  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright SOFTWARE XESTION3<br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>