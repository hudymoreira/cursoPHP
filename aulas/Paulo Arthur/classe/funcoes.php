<?php
	
/*	function bomDia() {
		echo "Bom dia";
	}
	
	bomdia();
*/
	
/*	function bomDia($nome) {
		echo "Bom dia, " . $nome;
	}
	
	bomdia("Jess");
*/

/*	function quadrado ($numero) {
		return $numero * $numero;
	}

	$resposta = quadrado(5);
	echo $resposta;
	
	echo "<br>";
	
	echo quadrado(12);
*/
	
/*	function imc ($peso, $altura) {
		return $peso/ ($altura * $altura);
	}
	
	echo imc(90, 1.82);
	
	echo "<br>";
	
	function circunf($r) {
		$pi = 3.14;
		return 2 * $pi * $r;
	} 
	
	echo circunf(26);
	
	echo "<br>";
*/

	function potencia ($base, $expoente) {
		
		if ($expoente == 0){	
			return 1;
		
		} else {
			return $base * potencia ($base, $expoente -1);
		}
		
	}
	
	echo potencia(3,3);
	
	
	

?>