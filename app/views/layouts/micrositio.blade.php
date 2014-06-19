<!doctype html>
<html lang="es_MX" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<title>Información Económica</title>
  @yield('extra-meta')
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
        <p>Es un portal que te permite conocer las estadísticas, indicadores y estudios económicos de la Ciudad de México.</p>

        <p class="pvl">
          <img src="{{asset('neues/logos.png')}}" width="600" height="100">
        </p>


      </div> <!-- /col-md-7 -->

      <div class="col-md-5">
        <div class="footer-banner">
          <h3 class="footer-title">Links de Interés</h3>
          <ul>
            <li><a href="http://www.sedecodf.gob.mx" target="new">Secretaría de Desarrrollo Económico</a></li>
            <li><a href="http://reporteeconomico.sedecodf.gob.mx" target="new">Reporte Económico de la Ciudad</a></li>
            <li><a href="http://codigo.labplc.mx" target="new">Código CDMX</a></li>
            <li><a href="http://www.labplc.mx" target="new">Laboratorio para la Ciudad</a></li>
            <li><a href="http://www.inegi.gob.mx" target="new">INEGI</a></li>
          </ul>
          <a href="https://github.com/LabPLC/infoeconomica/" target="new"><span class="fa fa-github fa-2x"></span> GitHub</a>
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