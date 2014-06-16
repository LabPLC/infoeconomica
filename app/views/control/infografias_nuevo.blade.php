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
                                <label for="file_upload">Archivo</label>
                                <input id="file_upload" name="file_upload" type="file" multiple="false">
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
<script src="{{asset('js/jquery.uploadifive.min.js')}}"></script>
<script language="JavaScript">
$(document).ready(function() {
    var postData;
    $('#file_upload').uploadifive({
        'uploadScript' : '{{url('control/infografias')}}',
        'auto' : false,
        'multi': false,
        'queueSizeLimit' : 1,
        'buttonText' : 'Buscar...',
        'onUploadComplete' : function() {
            console.log('ya se subieron');
            document.location = '{{url('control/infografias')}}';
        }
    });

    $("#guardar").click(function(evt){
        evt.preventDefault();
        //validaciones
        $('#file_upload').data('uploadifive').settings.formData = {
                'titulo' : $('#titulo').val(),
                'descripcion' : $('#descripcion').val()
            };
        $('#file_upload').uploadifive('upload');            
    });

});
</script>
@stop