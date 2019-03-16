<?php

	# Função 
	/*
	function bomDia(){
		echo "Bom dia";
	}
	bomDia();
	*/
	
	# Função com parâmetro
	/*
	function bomDia($nome){
		echo "Bom dia " . $nome;
	}
	bomDia("Ana");
	*/
	
	# Função com mais de um parâmetro
	/*
	function bomDia($nome, $snome){
		echo "Bom dia " . $nome . " " . $snome;
	}
	bomDia("Ana", "Santos");
	*/
	
	# Função com return(numerico)
	/*
	function quadrado($numero){
		return $numero * $numero;
	}
	
	$resposta =  quadrado(5);
	echo $resposta;
	echo "<br>";
	echo quadrado(7);
	*/
	
	# Calculando IMC
	/*
	function imc($peso, $altura){
		return $peso / ($altura * $altura);
	}
	echo imc(90,1.82);
	*/
	
	# Calculando area circunferencia
	/*
	function circun($r){
		$pi=3.14;
		return 2 * $pi * $r;
	}
	echo circun(26);
	*/
	
	# Função recursiva
	function potencia($base, $expoente){
		if($expoente == 0){
			return 1;
		}else{
			return $base * potencia($base, $expoente-1);	
		}
	}
	echo potencia(3, 3);
?>