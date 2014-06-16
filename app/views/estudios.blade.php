@extends('layouts.micrositio')

@section('contenido')

<div class="titulo row-spacer">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><h2>Estudios y An&aacute;lisis</h2></div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>

<div class="container">

<div class="row">
	@foreach($estudios as $estudio)
	<!-- item -->
	<div class="col-md-4">
	    <div class="post-item">
	    	<div class="overlay-estudios">
	    			<a class="ver" href="{{asset('media/'.$estudio->attachment)}}" target="new"><span class="glyphicon glyphicon-cloud-download"></a>
	    		</div>
	    	<div class="detalle-estudios">
	        	<h4 class="text-center">{{$estudio->titulo}}</h4>
	        </div>
	    </div>
	</div>
	<!-- item -->
	@endforeach
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