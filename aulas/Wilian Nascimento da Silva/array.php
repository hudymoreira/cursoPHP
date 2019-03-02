<?php 

	//Array simples
	#Array numérico
	/*
	$a = array(12,18,32,-16,45,17,18);
	echo $a[3] + $a[0];
	*/
	
	#Array de Strings
	/*
	$b = array("Batata","Cavalo","Couve","Carro");
	echo $b[0];
	*/
	
	#Array misto
	/*
	$c = array(16,"Batata",32,42,52,"Carro",2,"Couve");
	echo $c[3];
	*/
	
	#Array multidimensional
	/*
	$d = array(
		array(12,18,32,-16,45,17,18),
		array("Batata","Cavalo","Couve","Carro"),
		array(16,"Batata",32,42,52,"Carro",2,"Couve"),
	);
	
	echo $d[1][1];
	*/
	
	#Array associativo
	/*
	$e = array(
		"nome" => "Wilian",
		"snome" => "Nascimento",
		"telefone" => "999999999",
		"idade" => 20,
		"peso" => 70,
		"altura" => 1.7
	);
	echo $e["snome"];
	*/
	
	#Array associativo multidimensional
	/*
	$f = array(
		array(
			"nome" => "Wilian",
			"snome" => "Nascimento",
			"telefone" => "999999999",
			"idade" => 22,
			"peso" => 55,
			"altura" => 1.7
		),
		array(
			"nome" => "Hudson",
			"snome" => "Moreira",
			"telefone" => "88888888",
			"idade" => 25,
			"peso" => 70,
			"altura" => 1.7
		)
	);
	echo $f[1]["snome"];
	*/
	
	#Visualização de arrays
	/*
	echo "<pre>";
	print_r($f);
	echo "</pre>";
	*/
	
	#Tamanho do Array
	/*
	echo "<pre>";
	echo count($f);
	echo "</pre>";
	*/
	
?>