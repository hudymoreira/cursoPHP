<?php
	
	/* 	#Função de soma
	function numero() {
		return 1;
	}

	numero(); #Nao retorna nada
	
	echo numero() + 10; #pega o valor de return da função
	*/
	
	
	/*
	function numeroString() {
		return "numero 1";
	}

	numeroString(); #Nao retorna nada
	
	echo numeroString() ."numero2"; #pega o valor de return da função
	
	*/
	
	
	
	# função com parametros
	
	/*
	function bomDia($nome, $snome) {
		echo "Bom dia " .$nome . " ".$snome ."<br/>";
	}

	bomDia("Paulo", "Arthut");
	bomDia(0, 6);
	*/
	
	/*
	function calcImc($peso, $altura) {
		return $peso / ($altura * $altura)."<br>";
	}
	echo "Entre 18,5 e 24,99	Peso normal <br>";
	echo "Entre 25 e 29,99	Acima do peso <br>";
	echo "Entre 30 e 34,99	Obesidade I <br>";
	echo "Entre 35 e 39,99	Obesidade II (severa) <br>";
	echo "<br/>";
	echo calcImc(70,1.60);
	echo calcImc(170,2.10);

	*/
	
	
	
	#Formula para calcular a area da circuferencia
	/*
	function circu($raio) {
		$pi = 3.14;
		return 2 * $pi * $raio; 
	}
	
	echo circu(16);
	*/
	
	
	#Função de potenciação
	function potencia($base, $exponente) {
		if ($exponente == 0) {
			return 1;
		} else {
			return $base * potencia($base, $exponente -1);
		}
	}
	echo potencia(7,1);
?>
