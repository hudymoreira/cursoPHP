<?php

require_once("Personagem.php");
require_once("Mago.php");
require_once("partida.php");

$p1 = new Personagem( "NPC", null, 1) ;

$p2 = new Mago();
$p2->setNome("Patolino, o Mago");
$p2->setVida(70);
$p2->setForca(5);

//$p2->bolaDeFogo($p1);
partida::armadilha($p1);
$p2->bolaDeFogo($p1);

echo "<pre>";
print_r($p1);
print_r($p2);


echo "</pre>" ;

/*
echo "<pre>" ;
echo $p1->getNome() . "<br>";
echo $p1->getVida() . "<br>";
echo $p1->getForca() . "<br>";

echo "</pre>" ;

*/

?>

