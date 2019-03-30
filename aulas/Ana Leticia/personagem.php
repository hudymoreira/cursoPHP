<?php

	class Personagem{
		public $nome;
		public $vida;
		public $forca;
		
		function __construct($nome = null, $vida = null, $forca = null){
			$this->vida = 100;
			$this->forca = 6;
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
		
		//set valores nos atributos
		public function setNome($v){
			$this->nome = $v;
		}
		public function setVida($v){
			$this->vida = $v;
		}
		public function setForca($v){
			$this->forca = $v;
		}
		//get valores dos atributos
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
	
	$p1 = new Personagem("Lil",null,8);	
/*
	$cenario = array();
	
	for ($i = 1; $i <= 40; $i++){
		$cenario[] = new Personagem("Guest".$i);
	}
	$cenario[2]->setVida(8);
*/
?>