<?php

$sabrina = array (12,18,32,7,-3,8);
echo$sabrina[2];
echo "<br>";

$paulo = array("carro", "celular", "avião", "livro", "comida", "palavra");
echo $paulo[4];
echo "<br>";

$bia = array ("dinheiro", 18, "numero", 20,17,18);
echo $bia[2];
echo "<br>";

$mikael = array (
array(1,17,12,-70,70,32),
array("ola", "mundo", "teclado", "janela"),
array("mundo", 18, -17, "casa", "carro")
);
echo "<br>";
echo $mikael[1][2];

$makoy = array (
  array (
  "nome" => "mikael",
  "snome" => "pelizari",
  "telefone" => "999999",
  "peso" => 60, 
  "idade" => 24
),
  array (
   "nome" => "bia",
  "snome" => "santos",
  "telefone" => "999999",
  "peso" => 60, 
  "idade" => 24
),
  
 array (
   "nome" => "paulo",
  "snome" => "Arthur",
  "telefone" => "999999",
  "peso" => 60, 
  "idade" => 24
  )
 );
 
echo "<br>";
echo $makoy[1]["nome"];
?>


