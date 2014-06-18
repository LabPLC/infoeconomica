@extends('layouts.micrositio')

@section('contenido')
<div class="titulo">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><h3>Estudios y An&aacute;lisis</h3></div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>

<div class="main">
<div class="container">

<div class="row">
	@foreach($estudios as $estudio)
	<!-- item -->
	<div class="col-md-4">
	    <div class="post-item">
	    	<div class="overlay-estudios">
	    			<a class="ver" href="{{asset('media/'.$estudio->attachment)}}" target="new"><span class="glyphicon glyphicon-cloud-download"></span></a>
	    		</div>
	    	<div class="detalle-estudios">
	        	<h3 class="text-center">{{$estudio->titulo}}</h3>
	        </div>
	    </div>
	</div>
	<!-- item -->
	@endforeach
</div>


</div>
</div>
@endsection


@section('javascript')
<script language="javascript">
$(function(){
	$('.post-item').hover(function(){
		console.log('encima');
		$(this).find('.overlay-estudios').show();
	},function(){
		console.log('adios');
		$(this).find('.overlay-estudios').hide();
	});
});
</script>
@stop