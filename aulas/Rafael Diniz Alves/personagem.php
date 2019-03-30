<?php

		class personagem{
		
		public $nome;
		public $vida;
		public $forca;
		
		function __construct($n = null,$f = null,$v = null){
			
			$this->nome = $n; 
			$this->forca = $f; 
			$this->vida = $v;
			
			if($f == null){
				$this->forca = 5;
			}
			if($n == null){
				$this->nome = $n;
			}
			if($v == null){
				$this->vida = 100;
			}
			
			
		}
		
		
		
		
		
		//Seters
		public function setNome($v){
			
			$this->nome = $v; 
			
		}
		public function setVida($v){
			
			$this->vida = $v; 
			
		}
		public function setForca($v){
			
			$this->forca = $v; 
			
		}
		
		
		//Geters
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

?>