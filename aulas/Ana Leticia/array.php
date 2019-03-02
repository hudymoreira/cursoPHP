<?php
	
	# Array simples
	$a = array(12, 18, 32, -16, 45, 17, 18);
	echo $a[3] + $a[0];
	echo"<br>";
	
	# Array String
	$b = array("batata", "cavalo", "couve", "carro");
	echo $b[2];
	echo"<br>";
	
	# Array misto
	$c = array(16, "batata", 32, 42, 52, "carro", 2, "couve");
	echo $c[3];
	echo"<br>";
	
	# Array dimensional
	$d = array(
		array(1,3,5,17,18,42),
		array("casa","carro","moto"),
		array(1,3,"carro",4,"moto")
	);
		
	echo $d[1][1];
	echo"<br>";
	
	# Array associativo
	$e = array(
		"nome"	=>"Ana",
		"snome"	=>"Santos",
		"tel"	=>"(11)99999-9999",
		"idade"	=>18,
		"peso"	=>55,
		"altura"=>1.59
		);
	echo $e["nome"];
	
	# Array associativo mulidimencional
	$f = array(
		array(
		"nome"	=>"Ana",
		"snome"	=>"Santos",
		"tel"	=>"(11)92999-9999",
		"idade"	=>18,
		"peso"	=>55,
		"altura"=>1.59
		),
		
		array(
		"nome"	=>"Wilian",
		"snome"	=>"Silva",
		"tel"	=>"(11)99399-9999",
		"idade"	=>22,
		"peso"	=>55,
		"altura"=>1.70
		),
		
		array(
		"nome"	=>"Kaleo",
		"snome"	=>"Vieira",
		"tel"	=>"(11)99949-9999",
		"idade"	=>20,
		"peso"	=>70,
		"altura"=>1.70
		)
		);
	echo $f[0]["tel"];
	
	# Visualização de arrays
	
	echo"<pre>";
	echo count($d);
	//print_r($d);
	echo "</pre>";
		
	
?>