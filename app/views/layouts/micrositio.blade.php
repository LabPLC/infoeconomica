<!doctype html>
<html lang="es_MX">
<head>
	<meta charset="UTF-8">
	<title>Información Económica</title>
	<link rel="stylesheet" type="text/css" href="{{asset('style-home/bootstrap.css')}}">
	@yield('style')
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container container-fluid">
  	<div class="navbar-header"></div>
  	<ul class="nav navbar-nav">
        <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
        <li class="active"><a href="{{URL::route('estudios')}}">Estudios y Análisis</a></li>
        <li class="active"><a href="{{route('infografias')}}">Infografías</a></li>
  	</ul>
  </div>
</nav>
<div class="container">
	@yield('contenido')
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
@yield('extra-js')
@yield('javascript')
</body>
</html>