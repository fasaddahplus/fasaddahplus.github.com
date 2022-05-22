<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail -> CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$mail -> isSMTP();
$mail -> Host = 'smtp.gmail.com';
$mail -> SMTPAuth = true;
$mail -> Username = 'fasaddah2@gmail.com';
$mail -> Password = 'fa1sa2d3Dah';
$mail -> SMTPSesure = 'ssl';
$mail -> Port = 465;

$mail -> setForm('fasaddah2@gmail.com');
$mail -> addAddress('vorobecnazar7@gmail.com');
$mail -> isHTML(true);

$mail -> Subject = 'Заявка з сайта';
$mail -> Body = '' .$name . ' Оставив заявку, його телефон ' .$phone;
$mail -> AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>