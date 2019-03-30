<?php

class Personagem {
	public $nome ;
	public $vida ;
	public $forca ;
	
	function __construct ($nome = null, $vida = null, $forca = null) {
			$this->nome = "NoName";
			$this->vida = 100;
			$this->forca = 5;
			if ($nome != null) {
					$this->nome = $nome;
			}
			if ($vida != null) {
					$this->vida = $vida;
			}
			if ($forca != null) {
					$this->forca = $forca;
			}
			
	}
	
	//coloca valores
	public function setNome ($v) {
			$this->nome = $v;
	}
	
	public function setVida ($v) {
			$this->vida = $v;
	}
	
	public function setForca ($v) {
			$this->forca = $v;
	}
	//recupera valores
	public function getNome(){
			return $this->nome;
	}
	public function getVida(){
			return $this->vida;
	}
	public function getForca(){
			return $this->forca;
	}	
	
}

$p1 = new Personagem(null, null, 20) ;

echo "<pre>" ;
echo $p1->getNome() . "<br>";
echo $p1->getVida() . "<br>";
echo $p1->getForca() . "<br>";

echo "</pre>" ;

?>
