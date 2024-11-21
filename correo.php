<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
        $destinatario = "albertoizquierdo030@gmail.com";
        $name = $_POST['name'];
        $asunto = "Sin asunto";
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $header = "Enviado desde mi página web";
        $mensajeCompleto = $msg . "\nAtentamente: " . $name . "\n". $email;

        $mail = @mail($destinatario,$asunto,$mensajeCompleto,$header);
        if ($mail) {
            echo "<script>alert('Correo enviado exitosamente')</script>";
            echo "<script>setTimeout(\"location.href='index.html'\",300)</script>";
        }

    }
}

?>