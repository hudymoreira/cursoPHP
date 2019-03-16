<?php
	
	#Função
	/*
	function bomDia(){
		echo "Bom dia";
	}
	
	bomDia();
	*/
	
	#Função com parâmetro
	/*
	function bomDia($nome){
		echo "Bom dia, ".$nome;
	}
	
	bomDia("Wilian");
	*/
	
	#Função com 2 parâmetros
	/*
	function bomDia($nome,$sNome){
		echo "Bom dia, ".$nome." ".$sNome;
	}
	
	bomDia("Wilian","Nascimento");
	*/
	
	#Função com return
	/*
	function quadrado($numero){
		return $numero*$numero;
	}
	
	$resposta = quadrado(9);
	
	echo "Retorno via variável: ".$resposta."<br>";	
	
	echo "Retorno direto: ".quadrado(7);
	*/
	
	#Exemplo IMC
	/*
	function imc($peso,$altura){
		return $peso/($altura*$altura);
	}
	
	echo imc(60,1.75);
	*/
	
	#Exemplo Calculo Circunferencia
	/*function circu($r){
		$pi = 3.14;
		return 2*$pi*$r;
	}
	
	echo circu(26);
	*/
	
	#Função recursiva
	/*
	function potencia($base, $expoente){
		if($expoente == 0){
			return 1;
		}else{
			return $base*potencia($base,$expoente-1);
		}
	}
	
	echo potencia(7,2);
	*/
?>