<?php

$sabrina = array(12,18,32,7,-3,8);
echo $sabrina[2];
echo "<br>";
$paulo = array("felicidade","dinheiro","celular","carro","livro");
echo $paulo[0]; 
echo "<br>";
$bia = array("dinheiro",18,"número",20,17,18);
echo $bia[2];

echo "<br>";
$mikael = array ( 
array(1,17,12,-70,70,32),
array("olá","mundo","tclado","janela"),
array("comida",20,"mundo",-30,"casa","carro")
);
echo $mikael [0][3];

echo "<br>";
$makoy =  array(
          array (
          "nome" => "mikael",
		  "snome" => "pelizari",
	"telefone" => "98564-2336",
		  "peso" => 60,
		  "idade" => 24
	),
    	 array (
          "nome" => "bia",
		  "snome" => "santo",
	"telefone" => "98564-2336",
		  "peso" => 60,
		  "idade" => 24
	),	  
	 array (
          "nome" => "paulo",
		  "snome" => "arthur",
	"telefone" => "98564-2336",
		  "peso" => 60,
		  "idade" => 24
	)	  
);
echo "<br>";
echo $makoy[1]["nome"];
?>