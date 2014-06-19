@extends('layouts.micrositio')

@section('contenido')
<div class="headersote"></div>

<div id="main">

<div class="container">

<div class="row row-spacer">
	<h3 class="text-center">Estadísticas de la Ciudad de México</h3>
</div>
<div class="row">
	<div class="col-md-12">
		<div id="tab-indicadores">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab">
		  <li class="active"><a href="#sociedad" data-toggle="tab">Sociedad</a></li>
		  <li><a href="#economia" data-toggle="tab">Economía</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane active" id="sociedad">
		  	<div class="row">
		  		<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">Población del DF</h5>
						<h4 class="text-center">8,851,080</h4>
						<div class="abajo" align="center"><p class="text-center">2010 - INEGI</p></div>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">Población Economicamente Activa</h5>
						<h4 class="text-center">4,414,063</h4>
						<div class="abajo" align="center"><p class="text-center">2013 - INEGI</p></div>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">Población Ocupada en el DF</h5>
						<h4 class="text-center">4,142,343</h4>
						<div class="abajo" align="center"><p class="text-center">2013 - INEGI</p></div>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">Indice de Desarrollo Humano</h5>
						<h4 class="text-center">0.91</h4>
						<div class="abajo" align="center"><p class="text-center">Promedio, 2010 - PNUD</p></div>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">ITPL</h5>
						<h4 class="text-center">1.22</h4>
						<div class="abajo" align="center"><p class="text-center">2013 - CONEVAL</p></div>
					</div>
				</div>
		  	</div>
		  </div>
		  <div class="tab-pane" id="economia">
		  	<div class="row">
		  		<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">Producto Interno Bruto</h5>
						<h4 class="text-center">2.2</h4>
						<div class="abajo" align="center"><p class="text-center">2012 - INEGI</p></div>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">Formación Bruta de Capital Fijo</h5>
						<h4 class="text-center">106,472,653</h4>
						<div class="abajo" align="center"><p class="text-center">2009 - INEGI</p></div>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">Exportaciones Totales</h5>
						<h4 class="text-center">2,982,812</h4>
						<div class="abajo" align="center"><p class="text-center">2012 - INEGI</p></div>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info-trans">
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">Unidades Económicas</h5>
						<h4 class="text-center">428,756</h4>
						<div class="abajo" align="center"><p class="text-center">2013 - INEGI</p></div>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info-trans">
					</div>
				</div>
		  	</div>
		  </div>
		</div>
		</div><!--tab indicadores -->

	</div>
</div>
<div class="row spacer-2x">
	<a class="btn btn-hg btn-embossed btn-primary col-md-12" href="#">Descargar todos los datos</a>
</div>
<div class="row">
	<div class="col-md-6 arriba-1">
		<div class="bajar">
			<h5>Estudios recientes</h5>
		</div>
		@foreach($estudios as $estudio)
		<div class="bajar-item">
			<h5>{{$estudio->titulo}}</h5>
			<a href="{{url('media/'.$estudio->attachment)}}" target="new" class="bajar-link fa fa-chevron-right"></a>
		</div>
		@endforeach
	</div>
	<div class="col-md-6 arriba-1">
		<div class="bajar">
			<h5>Últimas infografías</h5>
		</div>
		@foreach($infografias as $infografia)
		<div class="bajar-item">
			<h5>{{$infografia->titulo}}</h5>
			<a href="{{url('infografias/'.$infografia->id)}}" class="bajar-link fa fa-chevron-right"></a>
		</div>
		@endforeach
	</div>
</div>

</div>

</div>
@endsection


@section('javascript')
<script language="javascript">
$(function(){
	$('#myTab a').click(function (e) {
  		e.preventDefault()
  		$(this).tab('show')
	});
});
</script>
@stop



