
<?php
	$mail_from = "weightintheworld@gmail.com";
	$mail_to = $_POST["mailOrdine"];
	$mail_subject = "Conferma Ordine";
	$mail_message = "Gentile cliente, la informiamo che il suo ordine effettuato sul portale WeightInTheWorld contenente: <br/>"
					.text."<br/> è stato confermato, la ringraziamo per aver acquistato dalla nostra azienda";
					
	mail($mail_to, $mail_subject, $mail_message);
?>
