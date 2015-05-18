<?php
	require 'C:\xampp\htdocs\practice\PHPMailer\PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$customer_name = 'Customer Name';
	$customer_number = '***-***-****';
	$general_comments = "This is a mailing test!";

	$mail->isSMTP();
	$mail->Host = 'smtp-mail.outlook.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'username';
	$mail->Password = 'password';
	$SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->From = 'drufty70@hotmail.com';
	$mail->FromName = 'David';
	$mail->addAddress('drufty70@hotmail.com', 'David Test');
	$mail->addAddress('mjay.parsons@gmail.com', 'Michael');
	$mail->addAddress('wes.gilleland@gmail.com', 'Wes');

	$mail->Subject = 'Test';
	$mail->Body = 'This is customer info ' . $customer_name . ' and here is their number ' . $customer_number
				.'Also here is some general comments: ' . $general_comments;

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
	}

	else {
		echo 'Message has been sent';
	}

?>