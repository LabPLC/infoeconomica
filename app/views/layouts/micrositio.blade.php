<!doctype html>
<html lang="es_MX">
<head>
	<meta charset="UTF-8">
	<title>Información Económica</title>
	<link rel="stylesheet" type="text/css" href="{{asset('neues/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('neues/flat-ui.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('neues/main.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('neues/font-awesome/css/font-awesome.min.css')}}">
	@yield('style')
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h3 class="footer-title">infoeconomica.mx</h3>
        <p>Introduccion aqui
        </p>

        <p class="pvl">
          Logos
        </p>


      </div> <!-- /col-md-7 -->

      <div class="col-md-5">
        <div class="footer-banner">
          <h3 class="footer-title">Links de Interés</h3>
          <ul>
            <li>SEDECO</li>
            <li>Reporte economico</li>
            <li>Laboratorio para la Ciudad</li>
          </ul>
          <a href="#" target="_blank">Link</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
@yield('extra-js')
@yield('javascript')
</body>
</html>