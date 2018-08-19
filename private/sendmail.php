<?php
#error_reporting(E_ALL);
#ini_set("display_errors", 1);

require 'phpmailer/PHPMailerAutoload.php';

if (!empty($_POST['name'])) {
    $login = 'biv2994@mail.ru';
    $password = 'm777onopoly';
    
    $fromName = 'Студия «Пегас»';
    $subject = "Заявка от клиента";

    $clientName = $_POST['name'];
    $clientEmail = $_POST['email'];

    $mail = new PHPMailer;
    $mail->isSMTP();

    #$mail->SMTPDebug = 1;
    $mail->Host = 'smtp.mail.ru';
    $mail->SMTPAuth = true;
    $mail->Username = $login;
    $mail->Password = $password;
    $mail->SMTPSecure = 'SSL';
    $mail->Port = '587';

    $mail->CharSet = 'UTF-8';
    $mail->From = $login;
    $mail->FromName = $fromName;
    $mail->addAddress($login, $fromName);

    $mail->isHTML(true);

    $mail->Subject = "Заявка от клиента";
    $mail->Body = "Клиент $clientName оставил(a) заявку.<br> E-mail: <a href=\"mailto:$clientEmail\">$clientEmail</a>";
    $mail->AltBody = "Клиент $clientName оставил(a) заявку.\r\n E-mail: $clientEmail";

    if ($mail->send()) {
        $answer = '1';
    } else {
        $answer = '0';
        #echo 'Ошибка отправки письма. ';
        #echo 'Ошибка: ' . $mail->ErrorInfo;
    }
    die($answer);
}

?>