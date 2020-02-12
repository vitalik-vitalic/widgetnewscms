<?php 
use PHPMailer\PHPMailer\PHPMailer;
require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");
$mailer = new PHPMailer(true);
$mailer->isSMTP();
$mailer->Host="smtp.mail.ru";
$mailer->SMTPAuth=true;
$mailer->Username="php_test_minsk";
$mailer->Password="qwer_!234";
$mailer->SMTPSecure="ssl";
$mailer->Port='465';

$mailer->From="php_test_minsk@mail.ru";
$mailer->FromName="Vasiliy";
$mailer->addAddress("loopy_loop@mail.ru","loopy_loop");
//$mailer->addAddress("emeraldmor@yandex.ru","emeraldmor");
$mailer->isHTML(true);

$mailer->Subject="test";
$mailer->Body="<p>Hello World! <b>This <i>HTML</i></b><></p>";
$mailer->AltBody="this plain text";


if($mailer->send()){
	echo "otpravleno";
}
else{
	echo "error";
	echo $mailer->$mailer->ErrorInfo;
}
/*$to = 'emeraldmor@yandex.ru';
$subject = 'Тема письма';
$from = ' info@example.ru>';

$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "Return-Path: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP" . phpversion() . "\r\n";

$message =
  "<html>
    <body>Текст письма</body>
  </html>";

mail($to, $subject, $message, $headers);*/
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST">
	<p>	<input type="text" name="email"></p>
	<p><input type="text" name="teme"></p>
	<p><input type="text" name="message"></p>
	<p><input type="submit"></p>
	</form>	
</body>
</html>