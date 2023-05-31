<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "alejandrotorresescalera@gmail.com";

    $asunto = "Mensaje de contacto desde el sitio web";

    $cuerpo = "Nombre: " . $nombre . "\n";
    $cuerpo .= "Correo: " . $correo . "\n";
    $cuerpo .= "Mensaje: " . $mensaje;

    // Encabezados del correo electrónico
    $headers = "From: " . $correo . "\r\n";
    $headers .= "Reply-To: " . $correo . "\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Gracias por contactarnos. Tu mensaje ha sido enviado.";
    } else {
        echo "Lo sentimos, hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>
