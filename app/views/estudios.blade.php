@extends('layouts.micrositio')

@section('contenido')
<div class="titulo">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><h4>Estudios y An&aacute;lisis</h4></div>
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
	    <div class="estudios">
	    	<div class="detalle-estudios">
	        	<h4 class="text-center">{{$estudio->titulo}}</h4>
	        </div>
	        <div class="link-estudios" align="right">
	        	<!-- <a href="#" class="text-center"><span class="fa fa-cloud-download"></span></a> -->
	        	<a href="{{url('media/'.$estudio->attachment)}}" target="new" class="text-center"><span class="fa fa-chevron-right"></span></a>
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