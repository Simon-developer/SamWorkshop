<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$contact = $_POST['contact'];
$offer = $_POST['offer'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'samworkshop@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Xexwup-hehxis-1tybnu'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('samworkshop@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('medvedevsmn@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Письмо с сайта SamWorkshop.ru';
$mail->Body    = '' .$name . ' предлагает - "' .$offer. '".<br>Его контакт: '.$contact;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.php?thanks=1');
}
?>