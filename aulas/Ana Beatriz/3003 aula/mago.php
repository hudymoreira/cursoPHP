<?php

class Mago extends personagem{
	public function  bolaDeFogo($p){
 		$v = $p->getVida();
		$p->setVida($v - 20);
	} 
}

?>