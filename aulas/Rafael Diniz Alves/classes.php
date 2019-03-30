<?php

require_once("personagem.php");
require_once("mago.php");
require_once("cenario.php");
require_once("primo.php");

/*
$p1 = new personagem("Rafael",5,105);

/*$p1->setNome("mr Rafael");
$p1->setVida(100);
$p1->setForca(5);*/

/*
$p2 = new mago("Jessica",5,100);

$p2->bolaDeFogo($p1);


Cenario::armadilha1($p2);
Cenario::armadilha2($p1);*/


$partida = array();

for($i = 1; $i <= 100; $i++){
	if(numPrimo($i)){
		$partida[] = new mago();
	}else{
		$partida[] = new personagem();
	}
}

$partida[0]->bolaDeFogo($partida[2]);

echo "<pre>";

print_r($partida);
print_r($p2);

echo "</pre>";
?>