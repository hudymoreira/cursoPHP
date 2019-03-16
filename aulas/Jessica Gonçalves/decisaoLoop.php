<?php

// IF

/*$v = 23;

if($v == 1 || $v == 2 || $v == 7){
	echo "v = 1 ou 2 ou 7";
	
} else {
	echo "v é diferente de 1 ou 2 ou 7";

}*/


/*
$v = 2;

if($v == 1){
	echo "Valor 1";
	
} else if ($v == 2){
	echo "Valor 2";
	
} else{
	echo "Valor diferente de 1 e 2";
}
*/

//FOR
/*
for($i = 0; $i <= 100; $i++){
	if($i == 4){continue;} //pula o número e continua os outros
	if($i == 8){break;} //para o for
	echo $i;
	//$i = $i + 2;
	echo "<br>";
}
*/

//WHILE
/*

$1 = 0;
while ($i<= 10){
	echo $i;
	echo "<br>";
	$i++;
}
*/

$i = 0;

//DO WHILE
/*
do{
	scho $i;
	echo "<br>";
	$i ++;
	
}while ($i <= 0);

*/

function imparPar($v){
	if ($v % 2 == 0){
		echo "$v é Par";
		
	}else {
		echo "$v é impar";
	}
}

//imparPar(170);

function numPrimo($v){
	if ($v == 1 || $v == 2){
		return true;
	}
	$contador = 0;
	for($i = $v; $i > 1; $i--){
		if($v % $i == 0){
			$contador++;
		}
	}
	if ($contador == 1){
		return true;
		
	} else {
		return false;
	}
	
}

for ($i = 1; $i <= 1000; $i ++){
	if(numPrimo($i)){
		echo $i."<br>";
	}
}





?>