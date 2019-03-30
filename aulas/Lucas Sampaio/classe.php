<?php
    
    class Personagem{
    public $nome;
    public $vida;
    public $forca;


        function __construct($nome = null,$vida = null, $forca = null){
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
        
        # Seta os valores
        public function setNome($v){
        $this->nome = $v; 
        }

        public function setVida($v){
        $this->vida = $v; 
        }

        public function setForca($v){
        $this->forca = $v; 
        }

        #Pega os valores
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

        $P1 = new Personagem("Porrildo",null,null);
        
        #$P1->setVida($P1->getVida()-6);
        $cenario = array();

        for ($i = 1; $i <= 5; $i++){
            $cenario [] = new Personagem ("Guest".$i);
        }
        
        $cenario[2]->setVida(8);
        echo "<pre>";
        print_r ($cenario);
        echo "</pre>";

        /*echo $P1->getNome(). "<br>";
        echo $P1->getVida(). "<br>";
        echo $P1->getForca(). "<br>";*/

?>