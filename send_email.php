<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Receber os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Configurar o e-mail
    $to = "produtosdocesencanto@gmail.com";
    $subject = "Reserva de Doces - Doces Encanto";
    $body = "
        Nome: $name\n
        E-mail: $email\n
        Telefone: $phone\n
        Data para Entrega: $date\n
        Mensagem:\n$message
    ";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem. Tente novamente.";
    }
} else {
    echo "Método inválido.";
}
?>
