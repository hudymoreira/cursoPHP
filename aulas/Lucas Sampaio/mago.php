<?php

class Mago extends Personagem{
    public function bolaOfFire($f){
        $bof= $f->getVida();
        $f->setVida($bof -10);
    }
}

?>