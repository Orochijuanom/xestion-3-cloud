<head>
    <meta charset="utf-8">
    <title>Editando Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="fernando mejia">

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="/images/fondotot.jpg" style="background-attachment: fixed">
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
			<li class=""><a href="/cloud/admin">ADMINISTRADOR XESTION3</a></li>
			 
	
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
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">
		
		
        
		<form action="/cloud/user/{{$user->id}}" method="post">
        {{ csrf_field() }}                        
        {{ method_field('PUT') }}
         @if (Session::get('message'))
                        <div ">
                            {{Session::get('message')}}
                            <br><br>            
                        </div>
                    @endif
				Id<br><input type="text" name="id" value="{{$user->id}}" readonly><br>
				Usuario<br> <input type="text" name="name" value="{{$user->name}}"><br>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    <br>
                @endif
				Correo usuario<br> <input type="text" name="email" value="{{$user->email}}"><br>
                 @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    <br>
                @endif
				Administrador<br>
                <select name="admin"> 
                @if($user->admin == 1)
                <option value="1" selected>Si</option>
                <option value="0">No</option>
                @else
                <option value="1" >Si</option>
                <option value="0" selected>No</option>
                @endif
                </select>
                <br>
                 @if ($errors->has('admin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('admin') }}</strong>
                    </span>
                    <br>
                @endif
				Proceso<br> <input type="text" name="celular" value="{{$user->celular}}"><br>
                 @if ($errors->has('celular'))
                    <span class="help-block">
                        <strong>{{ $errors->first('celular') }}</strong>
                    </span>
                    <br>
                @endif
                Ver<br> <input type="text" name="ver" value="{{$user->ver}}"><br>
                 @if ($errors->has('ver'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ver') }}</strong>
                    </span>
                    <br>
                @endif
                Estado<br> <input type="text" name="estado" value="{{$user->estado}}"><br>
                 @if ($errors->has('estado'))
                    <span class="help-block">
                        <strong>{{ $errors->first('estado') }}</strong>
                    </span>
                    <br>
                @endif
                Activo<br> 
                <select name="activo"> 
                @if($user->activo == 1)
                <option value="1" selected>Si</option>
                <option value="0">No</option>
                @else
                <option value="1" >Si</option>
                <option value="0" selected>No</option>
                @endif
                </select>
                <br>
                 @if ($errors->has('activo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('activo') }}</strong>
                    </span>
                    <br>
                @endif
                
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
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
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
  </body>