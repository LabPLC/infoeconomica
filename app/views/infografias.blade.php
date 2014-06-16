@extends('layouts.micrositio')

@section('contenido')

<div class="titulo row-spacer">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><h2>Infograf&iacute;as</h2></div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>

<div class="container">

<div class="row">
	@foreach($infografias as $infografia)
	<!-- item -->
	<div class="col-md-4">
	    <div class="post-item">
	    	<div class="thumb">
	    		<img src="{{asset('media/thumb_'.$infografia->attachment)}}" width="304" height="304">
	    		<div class="overlay">
	    			<a class="ver" href="{{url('infografias/'.$infografia->id)}}"><span class="glyphicon glyphicon-eye-open"></a>
	    		</div>
	    	</div>
	    	<div class="detalle">
	        	<h4 class="text-center">{{$infografia->titulo}}</h4>
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
		$(this).find('.overlay').show();
	},function(){
		console.log('adios');
		$(this).find('.overlay').hide();
	});
});
</script>
@stop