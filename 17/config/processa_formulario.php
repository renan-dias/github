<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Aqui você pode salvar as informações em um banco de dados ou enviar por e-mail
    echo "Obrigado por entrar em contato, $nome! Responderemos em breve.";
}
?>