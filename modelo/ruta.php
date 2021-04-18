<?php

class Ruta_Modelo{
    public function raiz_modelo(){
        // return "http://fenixdeveloping.com/";
        return "http://localhost/delicias-ines/";
    }
    static public function enlace_modelo($enlace){
        if ($enlace == "nosotros" ||
            $enlace == "contacto" ||
            $enlace == "productos") {
            $modulo = "vista/modulo/".$enlace.".php";
        }else if($enlace == "tamales" ||
            $enlace == "empanadas" ||
            $enlace == "envueltos" ||
            $enlace == "arepas"){
            $modulo = "vista/modulo/productos/".$enlace.".php";
        }else{
            $modulo = "vista/modulo/inicio.php";
        }
        return $modulo;
    }
}