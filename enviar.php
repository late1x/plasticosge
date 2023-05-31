<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configura los detalles del correo electrónico
    $to = "alejandrotorresescalera@gmail.com"; // Reemplaza con tu dirección de correo electrónico de Gmail
    $subject = "Mensaje desde el formulario de contacto";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Construye el cuerpo del correo electrónico
    $body = "Nombre: $name\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensaje:\n$message";

    // Configura las cabeceras del correo electrónico
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envía el correo electrónico
    if (mail($to, $subject, $body, $headers)) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Ocurrió un error al enviar el mensaje.";
    }
}
?>
