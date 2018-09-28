
	<?php include "head.php" ?>
		
		<link rel="stylesheet" href=".\style\style_contatti.css" />
		
		<div class="container">
			<div class="contact-title">
				<p>Completa il form sottostante per contattarci</p>
			</div>
			
			<div class="contact-form">
				<form action="mail.php" method="post" id="CN-FORM" name="contact-form">
					<input name="name" type="text" class="form-control" placeholder="Nome" required /><br/>
					<input name="cognome" type="text" class="form-control" placeholder="Cognome" required /><br/>
					<input name="email" type="email" class="form-control" placeholder="Email" required /><br/>
						<textarea name="message" class="form-control" placeholder="Messaggio" row="4" required></textarea><br/>
						<input type="submit" class="form-control" value="INVIA" />
				</form>
			</div>
			
		</div>
		
		
		
	<?php include "footer.php" ?>