<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variables del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Dirección de correo a la que se enviará el mensaje
    $para = 'rggcontable@gmail.com';
    $titulo = 'Mensaje desde la página web';

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje: $mensaje\n";

    // Cabeceras
    $cabeceras = "From: $email";

    // Enviar el correo
    if (mail($para, $titulo, $cuerpo, $cabeceras)) {
        echo "El mensaje se envió correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
