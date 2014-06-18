@extends('layouts.micrositio')

@section('contenido')
<div class="headersote"></div>

<div id="main">

<div class="container">

<div class="row row-spacer">
	<h3 class="text-center">Estadísticas de la Ciudad</h3>
</div>
<div class="row row-spacer">
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
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
		  	</div>
		  </div>
		  <div class="tab-pane" id="economia">
		  	<div class="row">
		  		<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
				<div class="col-md-4 arriba-1">
					<div class="info">
						<h5 class="text-center">titiulo</h5>
						<h4 class="text-center">9,234,098</h4>
						<p class="text-center">texto adicional</p>
					</div>
				</div>
		  	</div>
		  </div>
		</div>
		</div><!--tab indicadores -->

	</div>
</div>
<div class="row">
	<div class="col-md-6 arriba-1">
		<div class="bajar">
			<h5>Estudios recientes</h5>
		</div>
		@foreach($estudios as $estudio)
		<div class="bajar-item">
			<h5>{{$estudio->titulo}}</h5>
			<a href="#" class="bajar-link fa fa-chevron-right"></a>
			<a href="#" class="bajar-ver fa fa-download"></a>
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
			<a href="#" class="bajar-link fa fa-chevron-right"></a>
			<a href="#" class="bajar-ver fa fa-download"></a>
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



