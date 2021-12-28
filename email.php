<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$phone = $_POST["phone"];


try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aql.tech.kz@gmail.com';                     //SMTP username
    $mail->Password   = '@Admin123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('idlkz2019@gmail.com', 'IDLKZ');
    $mail->addAddress('idlkz2019@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('idlkz2019@gmail.com');               //Name is optional
    $mail->addReplyTo('idlkz2019@gmail.com', 'Information');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Дорогой пользователь, уведомляем Вас о том что на сайте AQL пользователь оставил заявку ';
    $mail->Body    = 'Пользователь с контактным телефоном  ' . $phone;
    $mail->AltBody = 'Пользователь с контактным телефоном  ' . $phone;
    setcookie("result",true, time()+2);
    $mail->send();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} catch (Exception $e) {
           setcookie("result",false, time()+2);
}