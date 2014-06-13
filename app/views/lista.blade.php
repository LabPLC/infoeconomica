@extends('layouts.master')

@section('content')
            <div class="content-header">
                <h1>
                    Indicadores
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
	                        <thead>
		                        <tr>
			                        <th>Clave</th>
			                        <th>Nombre</th>
			                        <th>Descripci&oacute;n</th>
			                        <th>Muestreo</th>
			                        <th></th>
		                        </tr>
	                        </thead>
	                        <tbody>
	                        <?php
	                        //loop para vaciar la info de indicadores actuales ####
	                        foreach($indicadores as $indicador) {
	                        ?>
		                        <tr>
			                        <td><a href="<?php print(url('detalle/'.$indicador->clave));?>"><?php print($indicador->clave);?></td></td>
			                        <td><?php print($indicador->nombre);?></td>
			                        <td><?php print($indicador->descripcion);?></td>
			                        <td><?php print($enums[$indicador->frecuencia_muestreo]);?></td>
			                        <td><button data="{{$indicador->id}}" type="button" class="eliminar-indicador btn btn-danger btn-xs">
  										<span class="glyphicon glyphicon-remove"></span> Eliminar
										</button>
										<a data="{{$indicador->id}}" href="{{url('/')}}/descarga/{{$indicador->clave}}.csv" target="_new" class="descargar-indicador btn btn-primary btn-xs">
  										<span class="glyphicon glyphicon-cloud-download"></span> CSV
										</a>
									</td>
		                        </tr>
		                    <?php
		                    } //fin loop indicadores
		                    //#####################################################
		                    ?>
	                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
@stop

@section('extra-script')
<script language="JavaScript">

function eliminar_indicador(id) {

	var res = confirm('Desea eliminar este indicador y todas sus muestras?');
	console.log(res);
	if(res) {

		//validaciones

            var postData = {
                indicador : id,
            };

            //ajax call
            $.ajax({
                url : '{{url('/')}}/delete',
                method : 'post',
                data : postData,
                success : function(response) {
                    document.location = '{{url('/')}}'
                },
                error : function() {
                    console.log('Error Ajax');
                }
            });

	}

}

//jquery todo
$(document).ready(function(){

	$('.eliminar-indicador').each(function() {
	    $(this).click(function(evt){
	        evt.preventDefault();
	        console.log($(this).attr('data'))
	        eliminar_indicador($(this).attr('data'))
	    });
	});

});
</script>
@stop