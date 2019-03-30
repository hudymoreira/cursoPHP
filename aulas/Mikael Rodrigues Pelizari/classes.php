<?php

require_once("Personagem.php");
require_once("Mago.php");
require_once("Partida.php");

$p1 = new Personagem("Hudy",100,5);
$p2 = new Personagem("Jose",null,10);
$p3 = new Mago("Leo",null,5);

$p3->bolaDeFogo($p1);

$p3->bolaDeFogo($p2);
Partida::armadilha($p3);

echo "<pre>";
print_r($p1);
print_r($p2);
print_r($p3);
echo "</pre>";

/*
echo "<pre>";
print_r($p1);
print_r($p2);
print_r($p3);
echo "</pre>";
*/

?>