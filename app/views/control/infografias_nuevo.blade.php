@extends('layouts.control')

@section('content')
            <div class="content-header">
                <h1>
                    Nueva infografía
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-6">
                        <form role="form">
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control" id="titulo" placeholder="Ej. La realidad economica del DF">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion" placeholder="">
                            </div>
                            <div class="form-group">
                                <a id="guardar" href="#" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>
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
                titulo : $('#titulo').val(),
                descripcion : $('#descripcion').val(),
            };

            //ajax call
            $.ajax({
                url : '{{url('control/infografias')}}',
                method : 'post',
                data : postData,
                success : function(response) {
                    document.location = '{{url('control/infografias')}}'
                },
                error : function() {
                    console.log('Error Ajax');
                }
            });
        });

});
</script>
@stop