<?php
require_once "controlador/ruta.php";
require_once "controlador/plantilla.php";
require_once "controlador/core.php";

require_once "modelo/ruta.php";
require_once "modelo/core.php";

$GLOBALS['raiz'] = Ruta_Controlador::raiz_controlador();

$plantilla = new Plantilla_Controlador();
$plantilla -> plantilla();