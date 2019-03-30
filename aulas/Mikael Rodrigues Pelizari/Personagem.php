<?php

class Personagem {

	public $nome;
	public $vida;
	public $forca;
	
	//Seters
	public function setNome ($v){
		$this->nome = $v;
	}
	
	public function setVida ($v){
		$this->vida = $v;
	}
	
	public function setForca ($v){
		$this->forca = $v;
	}
	
	function __construct ($nome = null, $vida = null, $forca = null){
		$this->vida = 100;
		$this->forca = 5;
		if ($nome != null){
			$this->nome = $nome;
		}
		if ($vida != null){
			$this->vida = $vida;
		}
		if ($forca != null){
			$this->forca = $forca;
			
		}
	}
	
	//Geters
	public function getNome (){
		return $this->nome;
	}
	
	public function getVida (){
		return $this->vida;
	}
	
	public function getForca (){
		return $this->forca;
	}
}




?>