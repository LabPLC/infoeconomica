@extends('layouts.control')

@section('content')
            <div class="content-header">
                <h1>
                    Estudios y An&aacute;lisis
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Descripci&oacute;n</th>
                                    <th>Categor&iacute;a</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($estudios as $estudio) {
                            ?>
                                <tr>
                                    <td>{{$estudio->titulo}}</td>
                                    <td>{{$estudio->descripcion}}</td>
                                    <td>{{$estudio->categoria}}</td>
                                    <td><a href="{{asset('media/'.$estudio->attachment)}}" target="_new" class="ver btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-eye-open"></span> Ver</a>
                                        <a href="#" data="{{$estudio->id}}" class="eliminar btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-remove"></span> Eliminar</a>
                                    </td>
                                </tr>
                            <?php
                            }// end foreach #####
                            ?>
                            </tbody>
                        </table>
                        <a class="btn btn-medium btn-success" href="{{url('control/estudios/nuevo')}}">
                        <span class="glyphicon glyphicon-plus-sign"></span> Nuevo documento</a>
                    </div>
                </div>
            </div>
@stop

@section('extra-script')
<script language="JavaScript">
function destroy(id) {
    var opt = confirm('¿Deseas eliminar el documento seleccionado?');
    if(opt) {
        $.ajax({
            url : '{{url('control/estudios')}}/'+id,
            method : 'delete',
            success : function(response) {
                document.location = '{{url('control/estudios')}}'
            },
            error : function() {
                console.log('Error Ajax');
            }
        });
    }
}
//jquery todo
$(document).ready(function(){
    $('.eliminar').click(function(e) {
        e.preventDefault();
        destroy($(this).attr('data'));
    })
});
</script>
@stop