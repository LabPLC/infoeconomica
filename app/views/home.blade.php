@extends('layouts.micrositio')


@section('style')
<style>
	#eco .info {
		background-color: #4775A3;
	}
	#demo .info {
		background-color: #336699;
	}
	#mas .info {
		background-color: #5C85AD;
	}
	.info {
		height: 180px;
	}
	.arriba-1 {
		padding: 10px;
	}
	.headersote{
		height: 120px;
	}
	.bajar {
		background-color: #3CB371;
		padding: 10px 0px 10px 15px;
	}
	.bajar h4 {;
		color: #fff;
	}
	.footer {
		height: 200px;
	}
	.row-spacer {
		margin-bottom: 35px;
	}
	.nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}
.nav-tabs, .nav-pills {
    text-align:center;
}
.tab-content {
	padding: 20px 0 20px 0;
}
</style>
@stop

@section('contenido')

<div class="row">
	<div class="col-md-12">
		<div class="headersote">
	</div>
</div>
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



