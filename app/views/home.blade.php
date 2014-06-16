@extends('layouts.micrositio')

@section('contenido')


<div class="headersote">
</div>

<div class="container">

<div class="row row-spacer">
	<h2 class="text-center">Estadísticas de la Ciudad</h2>
</div>
<div class="row row-spacer">
	<div class="col-md-12">
		<div id="tab-indicadores">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab">
		  <li class="active"><a href="#demo" data-toggle="tab">Demografía</a></li>
		  <li><a href="#eco" data-toggle="tab">Economía</a></li>
		  <li><a href="#mas" data-toggle="tab">Calidad de Vida</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane active" id="demo">
		  	<div class="row">
		  		<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
		  	</div>
		  </div>
		  <div class="tab-pane" id="eco">
		  	<div class="row">
		  		<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
		  	</div>
		  </div>
		  <div class="tab-pane" id="mas">
		  	<div class="row">
		  		<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
				</div>
				<div class="col-md-3 arriba-1">
					<div class="info"></div>
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
			<h4>Estudios recientes</h4>
		</div>
	</div>
	<div class="col-md-6 arriba-1">
		<div class="bajar">
			<h4>Últimas infografías</h4>
		</div>
	</div>
</div>
<div class="row footer">
	
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



