<?php
    
    require_once("personagem.php");
    require_once("mago.php");
    require_once("cenario.php");
    require_once("primo.php");

    /*$P1 = new Personagem ("Jubileu");
    $P2 = new Mago();
    $P2->setNome("Irinéu");
    $P2->setForca(5);    
    $P2->setVida(100);

    $P2->bolaOfFire($P1);
    Cenario::Armadilha($P2);
    Cenario::ArmadilhaK($P1);*/

    $Partida = array();
    
    for ($i = 1 ; $i <=100; $i++){
        if(numPrimo($i)){
            $Partida[] = new Mago();
        }else{
            $Partida[]  = new Personagem();
        }
    } 
    $Partida[0]->bolaOfFire($Partida[2]);


    echo "<pre>";
    print_r($Partida);
    echo "</pre>";

?>