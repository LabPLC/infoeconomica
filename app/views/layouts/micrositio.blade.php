<!doctype html>
<html lang="es_MX">
<head>
	<meta charset="UTF-8">
	<title>Información Económica</title>
	<link rel="stylesheet" type="text/css" href="{{asset('style-home/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style-home/main.css')}}">
	@yield('style')
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container container-fluid">
  	<div class="navbar-header">
     <a class="navbar-brand" href="{{url('/')}}">infoeconomica.mx</a> 
    </div>
  	<ul class="nav navbar-nav">
        <li class=""><a href="{{route('inicio')}}">Inicio</a></li>
        <li class=""><a href="{{URL::route('estudios')}}">Estudios y Análisis</a></li>
        <li class=""><a href="{{route('infografias')}}">Infografías</a></li>
  	</ul>
  </div>
</nav>
@yield('contenido')
<div class="footer">
  <div class="container footer-content">
    <div class="row">
      <div class="col-md-4">
        <h3>infoeconomica.mx</h3>
      </div>
      <div class="col-md-4">
        <div class="footer-info">
        <p>Este micrositio es un esfuerzo del Laboratorio para la Ciudad en conjunto con la Secretaria de Desarrollo Economico del Distrito federal
        </p>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
@yield('extra-js')
@yield('javascript')
</body>
</html>