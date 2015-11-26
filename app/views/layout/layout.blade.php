<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Proyecto CBTIS</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/bootstrapp.js"></script>

</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Desplegar Navegación</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="home">CBTIS</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="calificaciones">
	        <i class="glyphicon glyphicon-list-alt"></i> &nbsp Calificaciones 
	        <span class="sr-only">(current)</span></a></li>
	        <li><a href="materias">
	        <i class="glyphicon glyphicon-book"></i> &nbsp Materias
	        </a></li>
	        <!--
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Amigos <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	        -->
	      </ul>
	      <!--
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      -->
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">
	        <i class="glyphicon glyphicon-thumbs-up"></i> Amigos
	        </a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          <i class="glyphicon glyphicon-user"></i> Perfil 
	          <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Ver Perfil</a></li>
	            <li><a href="#">Configuraciones</a></li>
	            <li><a href="#">Centro de ayuda</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Cerrar sesión</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-1 col-xs"></div>
			<div class="col-md-10 col-xs-10">
				@yield('content')
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-1 col-xs"></div>
			<div class="col-md-10 col-xs-10">
				
			</div>
		</div>
	</div>

</body>
</html>