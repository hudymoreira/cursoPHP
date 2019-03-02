<?php

//                  ARRAY NUMÉRICOS
//---------------------------------------------------------

$a = array (12,18,32,-16,45,17,18);
echo$a[3]+$a[0];
echo"<br>";

//                  ARRAY STRINGS
//---------------------------------------------------------

$b = array("casa","caro","batata");
echo $b[0];
echo"<br>";

//                  ARRAY MISTO
//---------------------------------------------------------

$c = array(1,"batata","casa",17);
echo $c[1];
echo"<br>";


//                  ARRAY BIDMENSIONAL
//---------------------------------------------------------

$d = array(
	array(1,3,5,17,18,42),
	array("casa","carro","moto"),
	array(1,3,"carro",4,"moto")
		   );
		
echo $d[1][1];
echo"<br>";

//                  ARRAY ASSOCIATIVOS
//---------------------------------------------------------

$C = array (
	 "nome" => "Kaleo",
	 "Snome" => "Vieira",
	 "tel" => "41396011",
	 "idade" => 20,
	 "peso" => 70,
	 "altura" => 1.7
        	);
			
echo $C["Snome"];
echo"<br>";

// 			ANOTAÇÕES ASSOCIATIVO MULTIDIMENCINAL
//---------------------------------------------------------

$e = array (
		array(
		 "nome" => "Kaleo",
		 "Snome" => "Vieira",
		 "tel" => "41396011",
		 "idade" => 20,
		 "peso" => 70,
		 "altura" => 1.7
		),
		array(
		 "nome" => "Lucas",
		 "Snome" => "Sampaio",
		 "tel" => "41397528",
		 "idade" => 18,
		 "peso" => 63,
		 "altura" => 1.75
		),
		array(
		 "nome" => "Ana",
		 "Snome" => "Silva",
		 "tel" => "40028922",
		 "idade" => 19,
		 "peso" => 60,
		 "altura" => 1.6
		),
	 
);
echo $e[2]["tel"]

// 					ANOTAÇÕES A PARTE
//---------------------------------------------------------
/*
echo <pre>;  | 
print_r($e); | PUXA OS DADOS ARRAY
echo</pre>;  |

$a = array (1,2,3,4,5,6,7,8,9);
echo$a[0]+$a[6];
$b = array("maca","banana","moto","mutante","bala");
echo $b[4] + $b[3];
*/
?>