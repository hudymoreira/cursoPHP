<?php
class Cenario {

    public static function armadilha1($p){
        $v = $p->getVida();
        
        $p->setVida($v - 32);
    }

    public static function armadilha2($p2){
        $p2->setVida(0);
    }

}
?>