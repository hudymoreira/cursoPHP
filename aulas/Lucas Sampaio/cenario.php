<?php

class Cenario{
    public static function Armadilha($a){
        $v = $a->getVida();
        $a->setVida($v - 32);
    }
    public static function ArmadilhaK($ak){
        $ak->setVida(0);
    }
}

?>