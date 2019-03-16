<?php
								/*
								function numero(){
								return "numero 1";
								}
								echo numero() . "numero 2";
								*/
  
							/*
							function bomDia($nome,$snome){
							echo "Bom Dia ". $nome ." ". $snome. "<br>"; 
							}
							bomDia("hudy", "Moreira");
							bomDia("r2", "d2");
							*/
			
						/*
						function imc($Peso,$Altura){
						return $Peso /($Altura * $Altura);
						}
						echo imc (70, 1.6);
						echo "<br>";
						echo imc (170,2.1);
						*/
					/*
					function circu($raio){
					$pi=3.14;			
					return 2*$pi*$raio;
					}
					echo circu (16);
					*/
				
			function potencia($base,$expoente){
			if ($expoente == 0){
			return 1;
			} else {
			return $base * potencia($base,$expoente - 1);
			}
			}
			echo potencia(2,2);
			
			


			
			
?>


