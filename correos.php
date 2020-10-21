<?php
    $destinatario = 'rafasotogtz731@gmail.com';
    // esto es al correo al que se enviara el mensaje
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['servicio'];

    $header = $email;
    $mensajeCompleto = $mensaje . "\nAtentamente: " .$nombre;

    mail($destinatario, $mensajeCompleto, $header, );
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>