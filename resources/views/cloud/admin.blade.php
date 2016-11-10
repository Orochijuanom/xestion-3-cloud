<head>
    <meta charset="utf-8">
    <title>Administrador SOFTWARE XESTION3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="fernando mejia">

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
			<li class=""><a href="admin.php">ADMINISTRADOR XESTION3</a></li>
			 
	
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
		<h2> Administración de usuarios registrados</h2>	
		<!--<div class="well well-small">-->
		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
		

        
        @if(count($users) > 0)
			<table border='1'; class='table table-hover';>
					<tr class='warning'>
					<td>Id</td>
					<td>Usuario</td>
					<td>Correo</td>
					<td>administrador</td>
					<td>Proceso</td>
					<td>Ver</td>
					<td>Estado</td>
					<td>Activo</td>
					<td>Editar</td>
					<td>Borrar</td>
					</tr>

			    @foreach($users as $user)


               
			  
			
				  	<tr class='success'>
				    <td>{{$user->id}}</td>
				    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                    @if($user->admin == 1)
                    si 
                    @else
                    no 
                    @endif
                    </td>
				    <td>{{$user->celular}}</td>
					<td>{{$user->ver}}</td>
					<td>{{$user->estado}}</td>
					<td>
                    @if($user->activo == 1)
                    si 
                    @else
                    no
                    @endif
                    </td>

				    <td><a href='actualizar.php?id=$arreglo[0]'><img src='/images/actualizar.gif' class='img-rounded'></td>
					<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='/images/eliminar.png' class='img-rounded'/></a></td>
						

						
					</tr>
                    
                     @endforeach
				</table>
		
                @endif
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
<p>&copy; SOFTWARE XESTION3 <br/><br/></p>
 </footer>
<!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
  </body>