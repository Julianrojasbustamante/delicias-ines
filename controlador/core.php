<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Gestor_Contenidos_Controlador{
    public function categoria_controlador(){
        $consulta = Gestor_Contenidos_Modelo::categoria_modelo("servicio_categoria");
        echo '  <section>
                  <div class="container">
                    <div class="row">';
        foreach($consulta as $fila => $elemento){
          echo '      <div class="col-12 col-md-4">
                        <div class="contenedor-tajeta mx-auto mt-5 imagen-fondo-container-tarjeta">
                          <div class="card tarjeta tarjeta-frontal" style="background: url('.$elemento['imagen'].')no-repeat center; background-size:cover;">
                            <div class="card-body tarjeta-cuerpo color-fondo-cuerpo-tarjeta">
                              <h2 class="card-title titulo-servicio">'.$elemento['subtitulo'].'</h2>
                              <p class="card-text text-white parrafo-servicio">'.$elemento['descripcion'].'</p>
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                          </div>
                          <div class="card tarjeta tarjeta-trasera">
                            <div class="card-body tarjeta-cuerpo" style="background: #'.$elemento['color'].'; border-radius: 5rem 5rem 5rem 5rem;">
                              <div class="icono-cuerpo-trasero">
                                <i class="'.$elemento['icono'].'"></i>
                              </div
                              <div>
                                <a href="'.$elemento['enlace'].'" class="btn color-boton-ver-mas">Ver más..</a>
                              </div
                            </div>
                          </div>
                        </div>
                      </div>';
        }
        echo '      </div>
                  </div>
                </section>';
    }

    public function servicio_controlador($id_categoria){
        $consulta = Gestor_Contenidos_Modelo::servicio_modelo("servicio", $id_categoria);
        echo '<section class="mb-5">
                <div class="container-fluid" style="background: url('.$consulta[0]["imagen_categoria"].')no-repeat center; background-size:cover;">
                  <div class="row oscurecer-fondo">
                    <div class="col-12">
                      <h1 class="banner-imagen-incremento-ventas"></h1>
                    </div>
                    <div class="col-12 banner-espacio-texto-incremento-ventas">
                      <p class="text-center banner-tamanio-texto-incremento-ventas">¡'.$consulta[0]["categoria"].'!</p>
                    </div>
                  </div>
                </div>
              </section>      
                  <div class="container">
                    <div class="row card-deck">';
        foreach ($consulta as $fila => $elemento){
            echo'       <div class="col-12 col-md-4 card mb-4">
                            <div class="view overlay">
                                <img class="card-img-top" src="'.$elemento["imagen"].'" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"><h1 class="text-center">Fenix Developing</h1></div>
                                </a>
                            </div>
                            <div class="card-body tarjeta-cuerpo">
                                <h4 class="card-title text-dark font-weight-bold">'.$elemento["servicio"].'</h4>
                                <p class="text-dark">'.$elemento["descripcion"].'</p>
                                <button type="button" class="btn btn-block btn-lg btn-success">'.number_format($elemento["precio"]).'</button>
                            </div>
                        </div>';
        }
            echo '  </div>
                </div>';
    }
    // static public function nuevo_prospecto_controlador($datos){
    //     try {fenixdeveloping2020
    //         require_once '../librerias/PHPmailer/Exception.php';
    //         require_once '../librerias/PHPmailer/PHPMailer.php';
    //         require_once '../librerias/PHPmailer/SMTP.php';
    //         $mail = new PHPMailer(true);
    //         $mail->SMTPDebug = 0;
    //         $mail->isSMTP();
    //         $mail->Host       = 'smtp.gmail.com';
    //         $mail->SMTPAuth   = true;
    //         $mail->Username   = 'contacto@fenixdeveloping.com';
    //         $mail->Password   = 'Fenixdeveloping2020';
    //         $mail->SMTPSecure = 'tls';
    //         $mail->Port       = 587;
    //         $mail->setFrom('contacto@fenixdeveloping.com', 'Fenix Developing');
    //         $mail->addAddress($datos["prospecto_correo"]);
    //         $mail->isHTML(true);
    //         $mail->CharSet = 'UTF-8';
    //         $mail->Subject = '¡Tienes un nuevo mensaje! | EDCOM Telecomunicaciones';
    //         $mail->Body    = '<div style="width:100%; background:#E8E8E6; position:relative; font-family:Open Sans, san-serif; padding-bottom:40px">
    //                         <div style="font-size:1.2em; position:relative; margin:auto; width:500px; background:white; padding:20px">
    //                         <center>
    //                             <hr style="border:1px solid #63a129; width:80%">
    //                             <img style="padding:20px;" width="140" height="140" src="https://ret.com.co/wp-content/uploads/2020/06/logo-edcom-300x300-blanco.jpg">
    //                             <h2 style="font-weight:700">¿Necesitas nuestra ayuda?</h2>
    //                             <h4 style="font-weight:100; padding:0 20px">Hola '.$datos["prospecto_nombres"].'</h4>
    //                             <h4 style="font-weight:100; padding:0 20px">No te preocupes, ya recibimos tu mensaje.</h4>
    //                             <h4 style="font-weight:100; padding:0 20px">¡Te contactaremos lo más pronto posible!</h4>
    //                             <h4 style="font-weight:100; padding:0 20px"><cite>El equipo EDCOM</cite></h4>
    //                         </center>
    //                         </div>
    //                     </div>';
    //         $mail->send();
    //     } catch (Exception $e) {
    //         echo 'Ha ocurrido un error inesperado!';
    //     }
    //     try {
    //         require_once '../librerias/PHPmailer/Exception.php';
    //         require_once '../librerias/PHPmailer/PHPMailer.php';
    //         require_once '../librerias/PHPmailer/SMTP.php';
    //         $mail = new PHPMailer(true);
    //         $mail->SMTPDebug = 0;
    //         $mail->isSMTP();
    //         $mail->Host       = 'smtp.gmail.com';
    //         $mail->SMTPAuth   = true;
    //         $mail->Username   = 'contacto@fenixdeveloping.com';
    //         $mail->Password   = 'Fenixdeveloping2020';
    //         $mail->SMTPSecure = 'tls';
    //         $mail->Port       = 587;
    //         $mail->setFrom('contacto@fenixdeveloping.com', 'Fenix Developing');
    //         $mail->addAddress('jonatanliscano@fenixdeveloping.com');
    //         $mail->isHTML(true);
    //         $mail->CharSet = 'UTF-8';
    //         $mail->Subject = '¡Nuevo mensaje| Sitio web EDCOM!';
    //         $mail->Body    = '<div style="width:100%; background:#E8E8E6; position:relative; font-family:Open Sans, san-serif; padding-bottom:40px">
    //                         <div style="font-size:1.2em; position:relative; margin:auto; width:500px; background:white; padding:20px">
    //                         <center>
    //                             <hr style="border:1px solid #63a129; width:80%">
    //                             <img style="padding:20px;" width="140" height="140" src="https://ret.com.co/wp-content/uploads/2020/06/logo-edcom-300x300-blanco.jpg">
    //                             <h2 style="font-weight:700">Un usuario necesita ayuda</h2>
    //                             <h4 style="font-weight:100; padding:0 20px">Hola, acabas de recibir una nueva solicitud de contacto:</h4>
    //                             <h4 style="font-weight:100; padding:0 20px">Nombre:'.$datos["prospecto_nombres"].'</h4>
    //                             <h4 style="font-weight:100; padding:0 20px">Correo:'.$datos["prospecto_correo"].'</h4>
    //                             <h4 style="font-weight:100; padding:0 20px">Mensaje: '.$datos["prospecto_mensaje"].'</h4>
    //                             <h4 style="font-weight:100; padding:0 20px">¡Recuerda responderla lo más pronto posible!</h4>
    //                         </center>
    //                         </div>
    //                     </div>';
    //         $mail->send();
    //     } catch (Exception $e) {
    //         echo 'Ha ocurrido un error inesperado!';
    //     }
    //     $respuesta = "Ok";
    //     return $respuesta;
    // }
}
