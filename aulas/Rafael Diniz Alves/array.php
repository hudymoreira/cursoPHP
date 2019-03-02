<?php

//array simples
	$a = array(12,18,55,02,88,91,17,18);
	echo $a[3];
	echo "<br>";
	
//array simples
	$b = array("batata","cavalo","couve","carro");
	
	echo $b[2];
	echo "<br>";
	
	
//array simples com strings e int
	$c = array("batata",33,"couve",55);
	echo $c[3];
	echo "<br>";
	 
	 
//array multidimensional
	$d = array(
			array(1,2,3,4,5,6,7,8,9),
			array("casa","moto","carro"),
			array(1,"ola","qualquerCoisa")
		);
			
	echo $d[1][2];
	echo "<br>";
			
//array associativo
	$e = array(
		"nome" => "Rafael",
		"sNome" => "Diniz",
		"telefone" => "123456789",
		"peso" => "ND",
		"altura" => "1.67"
		);
		
	echo $e["peso"];
	echo "<br>";
	
	
	$f = array(
			array(
				"nome" => "Rafael",
				"sNome" => "Diniz",
				"telefone" => "123456789",
				"peso" => "ND",
				"altura" => "1.67"
			),
			array(
				"nome" => "Jessica",
				"sNome" => "Diniz",
				"telefone" => "123456789",
				"peso" => "ND",
				"altura" => "1.67"
			),
			array(
				"nome" => "parangaricotirimihuaro",
				"sNome" => "Diniz",
				"telefone" => "123456789",
				"peso" => "ND",
				"altura" => "1.67"
			),
			
		);
		

	
	
//laço de repetição foreach
	foreach ($f as &$valorzinho) {
		echo $valorzinho["nome"];
		echo "<br>";
	}
?>