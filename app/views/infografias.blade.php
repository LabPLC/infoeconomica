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


/*
para el estilo del item
*/
.post-item{
	background-color: #eee;
	height: 270px;
}
.post-item .detalle p {
	margin-top: 20px;
	margin-bottom: 0;
	font-size: 12px;
	color: #95a5a6;
}

.post-item .ver {
	font-size: 25pt;
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
	<h2 class="text-center">Infograf&iacute;as</h2>
</div>

<div class="row">
	@foreach($infografias as $infografia)
	<!-- item -->
	<div class="col-md-3">
	    <div class="post-item">
	    	<div class="thumb">
	    		<a class="ver" href="{{url('infografias/'.$infografia->id)}}"><span class="glyphicon glyphicon-eye-open"></a>
	    	</div>
	    	<div class="detalle">
	        	<h5 class="text-center">{{$infografia->titulo}}</h5>
	        	<p>{{$infografia->descripcion}}</p>
	        </div>
	    </div>
	</div>
	<!-- item -->
	@endforeach
</div>

<div class="row footer">
	
</div>
@endsection


@section('javascript')
<script language="javascript">
$(function(){
});
</script>
@stop