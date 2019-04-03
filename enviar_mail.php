<?php

//Reseteamos variables a 0.
//   $nombre = $email = $telefono = $mensaje = $para = $headers = $msjCorreo = NULL;
if (isset($_POST)) {
//Obtenemos valores input formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $para = 'copateleton@teleton.org.uy';
    $asunto = 'Contacto desde Web Copa Teleton 2018';

//Creamos cabecera.
    $headers = 'MIME-Version: 1.0' . PHP_EOL;
    $headers .= 'Content-type: text/plain; charset=utf-8' . PHP_EOL;
    $headers .= 'From:  "' . $nombre . '" <' . $email . '>' . PHP_EOL .
            'Reply-To: ' . $email . ' ' . PHP_EOL .
            'X-Mailer: PHP/' . phpversion();

//Componemos cuerpo correo.

    $msjCorreo = "Nombre: " . $nombre;
    $msjCorreo .= " \r\n";
    $msjCorreo .= "Email: " . $email;
    $msjCorreo .= " \r\n";
    $msjCorreo .= "Teléfono: " . $telefono;
    $msjCorreo .= " \r\n";
    $msjCorreo .= "Mensaje: " . $mensaje;
    $msjCorreo .= " \r\n";


    if (mail($para, $asunto, $msjCorreo, $headers)) {
        $retorno[0] = 'si';
    } else {
        $retorno[0] = 'no';
    }

    echo json_encode($retorno);
}