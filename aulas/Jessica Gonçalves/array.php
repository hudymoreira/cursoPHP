<?php

$a = array(12,18,32,-16,45,17,18);
echo $a[3] ;
echo "<br>";

$b = array ("Batata", "Cavalo","Couve","Carro");
echo $b[2];
echo "<br>";

$c = array(16, "batata", 32, 42, 52, "carro", 2, "couve");
echo $c[3];
echo "<br>";

$D = array (
	array(1,32,59,60,83),
	array("sopa", "duende", "doce", "mixagem"),
	array("data", 90, 45, "tijolinho", 23)
);

echo $D [1][1];
echo "<br>";

$assoc = array (
	"nome" => "Kaleo",
	"Snome" => "Vieira",
	"Telefone" => "99980-5321",
	"Idade" => 20,
	"Altura" => 170 
);
echo $assoc["nome"];
echo "<br>";

$assocMultiD = array (
	array(
		"nome" => "Kaleo",
		"Snome" => "Vieira",
		"Telefone" => "99980-5321",
		"Idade" => 20,
		"Altura" => 170 
	),
	array(
		"nome" => "Caio",
		"Snome" => "Damasceno",
		"Telefone" => "9785-4112",
		"Idade" => 28,
		"Altura" => 189 
	),
	array(
		"nome" => "Francisco",
		"Snome" => "Manuel",
		"Telefone" => "98569-5796",
		"Idade" => 24,
		"Altura" => 177 
	)
	
);

echo $assocMultiD [1]["nome"];




?>