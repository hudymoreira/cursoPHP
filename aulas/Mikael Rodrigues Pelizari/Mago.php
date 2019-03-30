<?php

class Mago extends Personagem{
	
	public function bolaDeFogo($p){
		$v = $p->getVida();
		$p->setVida($v - 20);
	}
	
}

?>