<?php

echo "Aula sobre array <br> " ;

$sabrina = array (12, 18, 32, 7, -3, 8);

echo "O valor do array Numerico é: " . $sabrina[4] . "<br>";

$paulo = array ("Carro", "Barco", "Jetsky", "Pedestres", "Banhistas", "Motos");

echo "O valor do array Texto é: " . $paulo [3] . "<br>";

$bia = array ("Dinheiro", 18, "Numero", 20, 17, 18);

echo "O valor do array Misto é: " . $bia[2] . "<br>";


$mikael = array (
	array(1, 17, -70, 70, 32),
	array("ola", "mundo", "teclado", "janela"),
	array("ola", 18, "mundo", 19, 20)
	);
	
	echo "O valor do array Dimensional é: " . $mikael [2][1] . "<br>";

$makoy = array (
	array(
	"Nome" => "Mikael",
	"Snome" => "Pelizari",
	"Telefone" => "999-999",
	"Peso" => 60,
	"Idade" => 24
	),
	array(
	"Nome" => "Bia",
	"Snome" => "Santos",
	"Telefone" => "999-999",
	"Peso" => 60,
	"Idade" => 24
	),
	array(
	"Nome" => "Paulo",
	"Snome" => "Pelizari",
	"Telefone" => "999-999",
	"Peso" => 60,
	"Idade" => 24
	)
	
);
	

	
echo "O valor do array Associativo Multidimensional é: " . $makoy[1]["Nome"]  . "<br>";
	


?>