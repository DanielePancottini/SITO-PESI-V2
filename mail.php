<?php
	$name = $_POST['name'];
	$cognome = $_POST['cognome'];
	$fm_mail = $_POST['email'];
	$message = $_POST['message'];
	
	$mail_sub = "Nuovo messaggio da WeightInTheWorld";
	$mail_to = 'weightintheworld@gmail.com';
	$mail_body = "User: $name $cognome.\n"."Messaggio: $message.\n";
	
	mail($mail_to, $fm_mail, $mail_body);
	
?>