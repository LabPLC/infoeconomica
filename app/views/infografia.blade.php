@extends('layouts.micrositio')

@section('extra-meta')
<meta property="og:title" content="{{$infografia->titulo}}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{url('infografias/'.$infografia->id)}}/" />
<meta property="og:image" content="{{asset('media/thumb_'.$infografia->attachment)}}" />
@stop

@section('contenido')
<div class="titulo">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><h4>{{$infografia->titulo}}</h4></div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>

<div class="main">
<div class="container">

<div class="row" align="center">
	<img src="{{asset('media/'.$infografia->attachment)}}">
</div>
<div class="row row-spacer actions" align="right">
	<a class="social" href="{{asset('media/full_'.$infografia->attachment)}}" target="new"><span class="fa fa-arrows-alt"></span> Expandir</a>
</div>

</div>
</div>
@endsection