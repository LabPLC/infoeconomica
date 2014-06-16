<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>infoeconomica.mx | Admin</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <style type="text/css">
        .login-panel {
            margin-top: 25%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">infoeconomica.mx</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input id="email" class="form-control" placeholder="Nombre de usuario" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input id="password" class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="#" id="do-login" class="btn btn-lg btn-success btn-block">Iniciar sesi&oacute;n</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/parsley.min.js')}}"></script>
    <script language="JavaScript">
    $(document).ready(function() {
        

        $("#do-login").click(function(evt){
            evt.preventDefault();

            //validaciones
            var postData = {
                user : $('#email').val(),
                pass : $('#password').val()
            };

            //ajax call
            $.ajax({
                url : '{{url('control/login')}}',
                method : 'post',
                data : postData,
                success : function(response) {
                    document.location = '{{url('control')}}'
                },
                error : function() {
                    console.log('Error Ajax');
                }
            });
              
        });

    });
</script>

</body>

</html>
