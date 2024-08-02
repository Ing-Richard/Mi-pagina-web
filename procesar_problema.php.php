<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $problema = htmlspecialchars($_POST['problema']);
    
    $to = "richard960596675@gmail.com";
    $subject = "Nuevo Problema Ingresado";
    $message = "Nombre: $nombre\n\nProblema:\n$problema";
    $headers = "From: noreply@tusitio.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Problema enviado exitosamente.";
    } else {
        echo "Error al enviar el problema.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
