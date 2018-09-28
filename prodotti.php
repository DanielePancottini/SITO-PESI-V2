
	<?php include "head.php" ?>
	
		<link rel="stylesheet" href=".\style\style_prodotti.css" />
		<script type="text/javascript">
			var a_prodotti = new Array();
			var a_qta = new Array();
			var a_prezzo = new Array();
			var coda_array = 0;
		</script>
		
	
		<div class="content">
		
			<div class="row">
				<div class="col">
					<input type="button" id="btnCart1" value="ADD TO CART" onclick="f_query('Prodotto 1', '1500', 'btnCart1')" />
				</div>
				
				<div class="col">
					<input type="button" id="btnCart2" value="ADD TO CART" onclick="f_query('Prodotto 2', '2500', 'btnCart2')" />
				</div>
				
				<div class="col">
					<input type="button" id="btnCart3" value="ADD TO CART" onclick="f_query('Prodotto 3', '3500', 'btnCart3')" />
				</div>
			</div>
			
			<div class="endPage">
				<img class="imgCart" src=".\images\cart.png" alt="not found" height="50px" width="50px"/>
				<button class="btnConferma"><a href=".\fatturazione.php">CONFERMA ORDINE</a></button>
			</div>
			
			
		</div>
			
			
			<script type="text/javascript">
				function f_query(nomeProdotto, prezzoProdotto, idBtn){
					
						document.getElementById(idBtn).value = "Disabled";
						document.getElementById(idBtn).disabled = true;
					
						a_prodotti[coda_array] = nomeProdotto;
						a_prezzo[coda_array] = prezzoProdotto;
					
						coda_array++;
				}
				
				function f_stampa(){
					var i;
					var text;
					for(i = 0; i < coda_array; i++){
						text += a_prodotti[i] + " " + a_prezzo[i] + "<br/>");
					}
					document.getElementById("deRoch").innerHTML = text;
				}
			</script>
			
	<?php include "footer.php" ?>