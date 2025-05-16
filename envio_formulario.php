<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $destino = "brunorodgers7@gmail.com";
    $assunto = "Contato - Miniverso Geek";
    $corpo = "Nome: $nome\nE-mail: $email\nMensagem:\n$mensagem";

    $headers = "From: $email";

    if (mail($destino, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>