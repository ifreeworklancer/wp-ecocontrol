<?php
session_start();

if (isset($_POST)) {

    $to = 'go.control.ua@gmail.com';
    $subject = "Форма заявки со страницы 'Стать волонтером'";

    $name = $_POST['f_name'] . (isset($_POST['l_name']) ? ' ' . $_POST['l_name'] : '');
    $email = $_POST['email'] ?? null;
    $patronymic = $_POST['patronymic'] ?? null;
    $birthday = $_POST['birthday'] ?? null;
    $region = $_POST['region'] ?? null;
    $city = $_POST['city'] ?? null;
    $index = $_POST['index'] ?? null;
    $outside = $_POST['outside'] ?? null;
    $house = $_POST['house'] ?? null;
    $entrance = $_POST['entrance'] ?? null;
    $apartment = $_POST['apartment'] ?? null;
    $phone = $_POST['phone'];

    $message = "Форма заявки со страницы 'Форма обращения'";
    $message .= "<p>Имя: {$name}</p>";
    $message .= "<p>Телефон: {$phone}</p>";
    if ($email) {
        $message .= "<p>E-mail: {$email}</p>";
    }
    if ($patronymic) {
        $message .= "<p>Отчество: {$patronymic}</p>";
    }
    if ($birthday) {
        $message .= "<p>День рождения: {$birthday}</p>";
    }
    if ($region) {
        $message .= "<p>Регион: {$region}</p>";
    }
    if ($city) {
        $message .= "<p>Город: {$city}</p>";
    }
    if ($index) {
        $message .= "<p>Индекс: {$index}</p>";
    }
    if ($outside) {
        $message .= "<p>Улица: {$outside}</p>";
    }
    if ($house) {
        $message .= "<p>Дом: {$house}</p>";
    }
    if ($entrance) {
        $message .= "<p>Подъезд: {$entrance}</p>";
    }
    if ($apartment) {
        $message .= "<p>Квартира: {$apartment}</p>";
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
