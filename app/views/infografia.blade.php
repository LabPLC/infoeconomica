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
.infografia-descripcion {
	color: #aaa;
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
	<h1 class="text-center">{{$infografia->titulo}}</h1>
	<h4 class="text-center infografia-descripcion">{{$infografia->descripcion}}</h4>
</div>
<div class="row row-spacer" align="center">
	<img src="{{asset('media/'.$infografia->attachment)}}">
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



