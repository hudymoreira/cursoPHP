<?php

/*
class nomeDaClasse{
    public $Atributo;

    public function Metodo1(){

    }

}
*/

//CLASSE
class Personagem{

    //VARIAVEIS PUBLICAS
    public $nome, $vida, $forca;

    //METODO CONSTRUTOR
    function __construct($nome = null, $vida = null, $forca = null){
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
    
    //SETs
    public function setNome($v){
        $this->nome = $v;        
    }
    public function setVida($v){
        $this->vida = $v;        
    }
    public function setForca($v){
        $this->forca = $v;        
    }

    //GETs
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

//ESTANCIANDO UM PERSONAGEM
$p1 = new Personagem('Pascazim', null, 10); // JA ESTA SENDO PASSADO O NOME NA HORA DA ESTANCIAÇÃO

//ATRIBUINDO VALORES AO PERSONAGEM
//$p1->setNome('Pascalzim'); /*ESTA SENDO DEFINIDO NA ESTANCIÇÃO DO PERSONAGEM */
//$p1->setVida('100'); /*ESTA COMENTADO PORQUE FOI DEFINIDO NO METODO CONSTRUTOR*/ 
//$p1->setForca('5'); /*ESTA COMENTADO PORQUE FOI DEFINIDO NO METODO CONSTRUTOR*/ 

//PRINTANDO OS VALORES DO PERSONAGEM
echo "<br>######### PERSONAGEM CRIADO ##############<br><br>";
echo $p1->getNome(). "<br>";
echo $p1->getVida(). "<br>";
echo $p1->getForca(). "<br>";
echo "<br>#############################################<br>";

//TIRANDO VIDA DO PERSONAGEM ESTANCIADO
echo "<br>## TIRANDO VIDA DO PERSONAGEM CRIADO ##<br><br>";
$p1->setVida($p1->getVida() - 10);
echo $p1->getVida(). "<br>";
echo "<br>#############################################<br>";

/*
echo "<pre>";
print_r($p1);
echo "</pre>";
*/

//CRIANDO UM CENARIO COM VARIOS PERSONAGENS

$cenario = array();

for ($i=1; $i <= 5  ; $i++) { 
    $cenario[] = new Personagem("Gest".$i);
}

$cenario[2]->setVida(8);

echo "<pre>";
print_r($cenario);
echo "<pre>";
echo "<br>#############################################<br>";

$kaleo = new Personagem('Kaleo Stark', null, null); 

echo "<pre>";
print_r($kaleo);
echo "<pre>";

?>