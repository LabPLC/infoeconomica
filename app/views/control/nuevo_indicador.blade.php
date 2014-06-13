@extends('layouts.control')

@section('content')
            <div class="content-header">
                <h1>
                    Nuevo Indicador
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-6">
                        <form role="form">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ej. Poblacion DF">
                            </div>
                            <div class="form-group">
                                <label for="clave">Clave</label>
                                <input type="text" class="form-control" id="clave" placeholder="Ej. POB_DF">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripci&oacute;n</label>
                                <input type="text" class="form-control" id="descripcion" placeholder="Descripcion extendida">
                            </div>
                            <div class="form-group">
                                <label for="muestreo">Frecuencia de muestreo</label>
                                <select id="muestreo" class="form-control">
                                    <option value="0">Anual</option>
                                    <option value="1">Mensual</option>
                                    <option value="2">Trimestral</option>
                                    <option value="3">Semestral</option>
                                    <option value="4">Diaria</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a id="guardar" href="#" class="btn btn-success">Guardar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@stop

@section('extra-script')
<script language="JavaScript">
$(document).ready(function(){

    $("#guardar").click(function(evt){
            evt.preventDefault();

            //validaciones
            var postData = {
                clave : $('#clave').val(),
                nombre : $('#nombre').val(),
                descripcion : $('#descripcion').val(),
                fm : $('#muestreo').val()
            };

            //ajax call
            $.ajax({
                url : '{{url('control/almacen')}}',
                method : 'post',
                data : postData,
                success : function(response) {
                    document.location = '{{url('control/almacen')}}'
                },
                error : function() {
                    console.log('Error Ajax');
                }
            });
        });

});
</script>
@stop