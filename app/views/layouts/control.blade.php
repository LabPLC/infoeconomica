<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>infoeconomica.mx</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php print(url('/')); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php print(url('css')); ?>/simple-sidebar.css" rel="stylesheet">
    <link href="<?php print(url('css')); ?>/uploadifive.css" rel="stylesheet">
    <link href="<?php print(url('font-awesome')); ?>/css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">
        .spacer {
            margin: 10px 0 10px 0;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">infoeconomica.mx</li>
                <li><a href="<?php print(url('control/almacen')); ?>">Almacen de Indicadores</a></li>
                <li><a href="<?php print(url('control/estudios')); ?>">Estudios y Analisis</a></li>
                <li><a href="<?php print(url('control/infografias')); ?>">Infografias</a></li>
                <li><a href="<?php print(url('control/logout'));?>">Salir</a></li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            @yield('content')
        </div>

    </div>

    <!-- JavaScript -->
    <script src="<?php print(url('/')); ?>/js/jquery.js"></script>
    <script src="<?php print(url('/')); ?>/js/bootstrap.js"></script>
    <script src="<?php print(url('/')); ?>/js/app.js"></script>
    @yield('extra-script')
</body>

</html>