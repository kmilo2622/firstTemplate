<?php

/*
Programa de correos desarrollado por Juan Camilo Arroyave Rico
*/

include 'PHPMailer/PHPMailerAutoload.php';
require('mail-last.php');

$request = $_REQUEST;

// print_r($request); die;

//Primero hacemos las validaciones respectivas dado que no todos los campos son requeridos

if (isset($request['name'])) {
    $nombre = strip_tags($request['name'],"");
} else {
    $nombre = "No hay un nombre";
}

if (isset($request['email'])) {
    $email = strip_tags($request['email'],"");
} else {
    $email = "No hay una email";
}

if (isset($request['phone'])) {
    $telefono = strip_tags($request['phone'],"");
} else {
    $telefono = "No hay una Teléfono";
}

if (isset($request['pick_address'])) {
    $recogida = strip_tags($request['pick_address'],"");
} else {
    $recogida = "No hay una Dirección de recogida";
}

if (isset($request['return_address'])) {
    $entrega = strip_tags($request['return_address'],"");
} else {
    $entrega = "No hay una Dirección de Entrega";
}

if (isset($request['observations'])) {
    $observaciones = strip_tags($request['observations'],"");
} else {
    $observaciones = "No hay Observaciones";
}

//ahora configuramos el email

//$destinatario = $mailsettings['username'];

date_default_timezone_set("America/Bogota");
$time = time();

$message = utf8_decode(file_get_contents('mail-templates/detalle_send.html'));
$asunto = 'Solicitud de envio ' . $nombre;
$message = str_replace('%asunto%', 'Solicitud de ' . $nombre, $message);
$message = str_replace('%fecha%', date('m-d-Y H:i:s', $time), $message);
$message = str_replace('%nombre%', $nombre, $message);
$message = str_replace('%email%', $email, $message);
$message = str_replace('%telefono%', $telefono, $message);
$message = str_replace('%recogida%', $recogida, $message);
$message = str_replace('%entrega%', $entrega, $message);
$message = str_replace('%observaciones%', $observaciones, $message);
$message = str_replace('%pagina%', $_SERVER['HTTP_HOST'], $message);

//Esta versión comentariada de PHP mailer es la que necesita de contraseña

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = $mailsettings['host'];; //Smtp de 1and1
$mail->Port = $mailsettings['port'];;
$mail->Username = $mailsettings['username']; //Correo de 1and1
$mail->Password = $mailsettings['password']; //Password del correo
$mail->From = $mailsettings['fromusername'];
$mail->FromName = 'Contacto Tu Aliado Express';
$mail->AddAddress($mailsettings['destinatario'], 'Informacion');
$mail->IsHTML(true);
$mail->SMTPDebug = 0;
$mail->Subject = $asunto;
$mail->MsgHTML($message);

if(!$mail->Send()) {
    $mensajeria = $mail->ErrorInfo;
} else {
    if (!headers_sent()) { ?>

    <script type="text/javascript">
        if (confirm("Mensaje Enviado Exitosamente") == true) {
            window.location.href="../index.php";
            <?php //header('Location: index.php?mensaje=1'); ?>
        } else {
            window.location.href="../index.php";
            <?php //header('Location: index.php?mensaje=1'); ?>
        }
    </script>

    <noscript>
        <meta http-equiv="refresh" content="0;url='.$url.'" />
    </noscript>

    <?php } else { ?>

    <script type="text/javascript">
        if (confirm("Mensaje Enviado Exitosamente") == true) {
            window.location.href="../index.php";
        } else {
            window.location.href="../index.php";
        }
    </script>

    <noscript>
        <meta http-equiv="refresh" content="0;url='.$url.'" />
    </noscript>

    <?php }
}
?>