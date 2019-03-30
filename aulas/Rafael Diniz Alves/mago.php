<?php
	

	
	
	
	class mago extends personagem{
		
		public $mana;
		
		
		
		public function bolaDefogo($p){
			
			$v = $p-> getVida();
			$p->setVida($v -10);
			
		}
		
	}

?>