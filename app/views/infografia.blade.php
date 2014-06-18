@extends('layouts.micrositio')

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
	<a class="social" href="#"><span class="fa fa-facebook-square"></span></a>
</div>

</div>
</div>
@endsection