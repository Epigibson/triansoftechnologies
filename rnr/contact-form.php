<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Gracias!</title>
</head>
<body style="text-align: center;padding:20px 0;">
	<?php

		$name = $_POST['contactname'];
		$email = $_POST['contactemail'];
		$subject = $_POST['contactsubject'];
		$message = $_POST['contactmessage'];

		$formcontent=" From: Formulario de Contacto de Triansoft Triansoft Technologies $email \n
		Name: $name \n
		Email Address: $email \n
		Subject: $subject \n
		Message: $message";
		
		$recipient = "contacto@triansoftech.com";
		$subject = "Formulario de contacto de Web";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

	?>


</body>
</html>
