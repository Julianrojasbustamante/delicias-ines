<!doctype html>
<html lang="en">
    <head>
        <title>Delicias Ines</title>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="Delicias Ines">
        <meta name="author" content="Julian Rojas, Diana Quitian & Jonatan Liscano">

        <!-- LOGO pestaña -->
        <link rel="icon" href="vista/img/icono-pestania-web.ico" />

        <!-- Bootstrap CSS MDB 4.19.1 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['raiz'];?>vista/css/core.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['raiz'];?>vista/css/slider.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
            include "vista/modulo/core/encabezado.php";
            $modulo = new Ruta_Controlador();
            $modulo -> enlace_controlador();
            include "vista/modulo/core/pie.php";
        ?>
        <!-- Optional JavaScript MDB 4.19.1 -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script src="https://kit.fontawesome.com/d9194fa706.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo $GLOBALS['raiz'];?>vista/js/core.js"></script>
        <script type="text/javascript" src="<?php echo $GLOBALS['raiz'];?>vista/js/slider.js"></script>
    </body>
</html>