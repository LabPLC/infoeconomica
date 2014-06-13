@extends('layouts.master')

@section('content')
            <div class="content-header">
                <h1>
                    <?php print($indicador->clave); ?> - <?php print($indicador->nombre); ?>
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                    	<p class="lead"><?php print($indicador->descripcion); ?></p>
                        <table class="table table-hover">
	                        <thead>
		                        <tr>
			                        <th>Muestra</th>
			                        <th>Valor</th>
                                    <th></th>
		                        </tr>
	                        </thead>
	                        <tbody>
                            <?php
                            //loop para vaciar la info de indicadores actuales ####

                            foreach($muestras as $muestra) {
                                ?>
                                <tr>
                                    <td><?php print($muestra->anio);?> - <?php print($freq_enums[$muestra->mes]);?></td>
                                    <td><?php print($muestra->valor);?></td>
                                    <td><button data="{{$muestra->id}}" type="button" class="eliminar-muestra btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-remove"></span> Eliminar
                                        </button></td>
                                </tr>
                            <?php
                            } //fin loop indicadores
                            //#####################################################
                            ?>
	                       	</tbody>
                        </table>
                    </div>
                    <div class="col-md-12">

                        <hr>

                        <h2>Agregar nueva muestra</h2>

                        <form class="form-inline" role="form">

                            <div class="form-group">
                                <label class="sr-only" for="anio">Año</label>
                                <input type="text" class="form-control" id="anio" placeholder="2001">
                            </div>
                            @if($indicador->frecuencia_muestreo == 1 || $indicador->frecuencia_muestreo == 4)
                            <div class="form-group">
                                <label class="sr-only"  for="mes">Mes</label>
                                <select id="mes" class="form-control">
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                            </div>
                            @endif
                            @if($indicador->frecuencia_muestreo == 2)
                            <div class="form-group">
                                <label class="sr-only"  for="trimestre">Trimestre</label>
                                <select id="trimestre" class="form-control">
                                    <option value="301">Primer trimestre</option>
                                    <option value="302">Segundo trimestre</option>
                                    <option value="303">Tercer trimestre</option>
                                    <option value="304">Cuarto trimestre</option>
                                </select>
                            </div>
                            @endif
                            @if($indicador->frecuencia_muestreo == 3)
                            <div class="form-group">
                                <label class="sr-only"  for="semestre">Semestre</label>
                                <select id="semestre" class="form-control">
                                    <option value="601">Primer semestre</option>
                                    <option value="602">Segundo semestre</option>
                                </select>
                            </div>
                            @endif
                            @if($indicador->frecuencia_muestreo == 4)
                            <div class="form-group">
                                <label class="sr-only"  for="dia">Semestre</label>
                                <select id="dia" class="form-control">
                                    @for($x=1;$x<=31;$x++)
                                    <option value="{{$x}}">{{$x}}</option>
                                    @endfor
                                </select>
                            </div>
                            @endif
                            <div class="form-group">
                                <label class="sr-only" for="muestra">Valor</label>
                                <input type="text" class="form-control" id="muestra" placeholder="Valor">
                            </div>
                            <a href="#" id="agregar" class="btn btn-success">Agregar</a>
                        </form>

                    </div>
                    <div class="col-md-12">
                        <hr>
                        <h1><a data="{{$indicador->id}}" href="/indicadores/descarga/{{$indicador->clave}}.csv" target="_new" class="descargar-indicador btn btn-primary btn-md">
                                        <span class="glyphicon glyphicon-cloud-download"></span> Descargar CSV
                                        </a></h1>
                    </div>
                </div>

            </div>
        
        </div>
@stop

@section('extra-script')
<script language="JavaScript">

function fill_data() {

    var output ={};

    output.cve = '{{$indicador->id}}';
    output.anio = $("#anio").val();
    output.muestra = $("#muestra").val();

     @if($indicador->frecuencia_muestreo == 1 || $indicador->frecuencia_muestreo == 4)

        output.freq = $("#mes").val();
    @endif
    @if($indicador->frecuencia_muestreo == 2)

        output.freq = $("#trimestre").val();
    @endif
    @if($indicador->frecuencia_muestreo == 3)

        output.freq = $("#semestre").val();
    @endif
    @if($indicador->frecuencia_muestreo == 4)

        output.freq = $("#mes").val();
        output.freq2 = $("#dia").val();
    @endif


    return output;

}

function eliminar_muestra(id) {

    var res = confirm('Desea eliminar esta muestra?');
    console.log(res);
    if(res) {

        //validaciones

            var postData = {
                muestra : id,
            };

            //ajax call
            $.ajax({
                url : '{{url('/')}}/muestra_delete',
                method : 'post',
                data : postData,
                success : function(response) {
                    location.reload();
                },
                error : function() {
                    console.log('Error Ajax');
                }
            });

    }

}

$(document).ready(function(){

    $('.eliminar-muestra').each(function() {
        $(this).click(function(evt){
            evt.preventDefault();
            console.log($(this).attr('data'))
            eliminar_muestra($(this).attr('data'))
        });
    });

    $("#agregar").click(function(evt){
            evt.preventDefault();

            //validaciones
            var postData = fill_data();

            console.log(postData);

            //ajax call
            $.ajax({
                url : '{{url('/')}}/add_muestra',
                method : 'post',
                data : postData,
                success : function(response) {
                    location.reload();
                },
                error : function() {
                    console.log('Error Ajax');
                }
            });
        });

});
</script>
@stop