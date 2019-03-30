<?php
require_once ("personagem.php");
require_once ("mago.php");
require_once ("partida.php");

$p1 = new Personagem("elizabeth",null,10);
$p2 = new Personagem("arthur",null,5);

$p3 = new Mago();
$p3->setNome("leo");
$p3->setVida(100);
$p3->setForca(5);

Partida::armadilha($p1); 

echo "<pre>";
print_r($p1); 
print_r($p2); 
print_r($p3); 

echo "</pre>";


?>

