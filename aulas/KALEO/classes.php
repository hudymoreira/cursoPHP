<?php
require_once("personagem.php");
require_once("mago.php");
require_once("cenario.php");
require_once("primo.php");

/*
$p1 = new Personagem("Hulk");
$p2 = new Mago();
$p2->setNome("DR Estranho");
$p2->setForca(5);
$p2->setVida(101);

$p2->bolaDeFogo($p1);

Cenario::armadilha1($p2);
Cenario::armadilha2($p1);
*/

$partida = array();

for($i = 1; $i <= 100; $i++){
    if(numPrimo($i)){
        $partida[] = new Mago();
    } else {
        $partida[] = new Personagem();
    }
}

$partida[0]->bolaDeFogo($partida[2]);

echo'<pre>';
print_r($partida);
//  print_r($partida);
echo'</pre>';


?>