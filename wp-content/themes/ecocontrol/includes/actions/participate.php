<?php
session_start();

if (isset($_POST)) {

    $to = 'go.control.ua@gmail.com';
    $subject = "Форма заявки со страницы 'Принять участие'";

    $name = $_POST['f_name'];
    $email = $_POST['email'] ?? null;
    $phone = $_POST['phone'];

    $message = "Форма заявки со страницы 'Принять участие'";
    $message .= "<p>Имя: {$name}</p>";
    $message .= "<p>Телефон: {$phone}</p>";
    if ($email) {
        $message .= "<p>E-mail: {$email}</p>";
    }

    $mail = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>{$message}</body></html>";

    $headers = "From: noreply@ecocontrol.com.ua\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    mail($to, $subject, $mail, $headers);

    $_SESSION['message'] = 'success';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
