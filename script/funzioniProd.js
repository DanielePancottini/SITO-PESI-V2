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