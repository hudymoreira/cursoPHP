<?php
	/*
    echo "Aula sobre array <br/>";
	$sabrina = array(12,18,32,7,-3,8);
	echo $sabrina[2];
	echo "<br/>";
	//$paulo = ["Palmeiras", "Não", "Tem", "Mundial"]
	$paulo = array("carro", "celular", "avião", "livro", "comida", "palavra");
	echo $paulo[0]; //carro
	echo "<br/>";
	$bia = array("dinheiro", 18, "numero", 20, 17,18);
	echo $bia[2];
	*/
	
	// Array dimensional
	
	/*
	$mikael = array(
	array(1,17,12,-70,70,32),
	array("Ola","mundo", "teclado", "Janela"),
	array("mundo",18,-17,"casa","carro")
	);
	echo $mikael[1][1];
	*/
	
	//ARRAY Associativo - multidimencional
	
	$makoy = array(
		array(
			"nome" => "Mikael",
			"snome" => "Pelizari",
			"telefone" => "4002-8922",
			"peso" => 60,
			"idade" => 24
		),
		array(
			"nome" => "bia",
			"snome" => "Santos",
			"telefone" => "4002-8922",
			"peso" => 60,
			"idade" => 24
		),
		array(
			"nome" => "Paulo",
			"snome" => "Arthur",
			"telefone" => "4002-8922",
			"peso" => 60,
			"idade" => 24
		)
	);
	echo $makoy[2]["nome"];
	
	
?>