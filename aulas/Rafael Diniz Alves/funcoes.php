<?php
	/*function teste($teste){
		echo $teste;
		bomDia();
	}
	
	teste("123");
	*/
	/*function bomDia(){
		echo "<br>";
		echo "Tenha um bom dia!!!";
	}
	$resposta = quadrado(12);
	echo $resposta;
	function quadrado($num){
		echo "<br>";
		return $num * $num;
		
	}
	echo calculaIMC(90,1.82);
	
	function calculaIMC($peso,$altura){
		echo "<br>";
		
		return $peso / ($altura * $altura);
		
	}*/
	
	/*function circuferencia($raio){
		
		$pi = 3.14;
		
		return 2 * $pi * $raio;		
	}
	echo circuferencia(26);*/
	
	
	function potencia($base, $expoente){
		if($expoente == 0){
		
			return 1;
		}
		else{
		
			return $base * potencia($base,$expoente - 1);
		}
			
	}
	
	echo potencia(2,8);
	
?>