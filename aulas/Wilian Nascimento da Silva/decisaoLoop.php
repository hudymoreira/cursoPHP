<?php 
	
	#Decisão
	//IF ~ ELSE ~ ELSE IF
	/*
	$v = 1;
	if($v == 1){
		echo "É igual a 1";
	}
	
	echo "<br>";
	
	$v = 11;
	if($v != 1){
		echo "É diferente de 1";
	}
	
	echo "<br>";
	
	$v = 1;
	if($v != 1){
		echo "v é diferente 1";
	}else{
		echo "v é igual a 1";
	}
	
	echo "<br>";
	
	$v = 3;
	if($v == 1){
		echo "v é igual a 1";
	}else if($v == 2){
		echo "v é igual a 2";
	}else{
		echo "v é diferente de 1 e 2";
	}
	
	$v = 23;
	if($v == 1 || $v == 2 || $v == 7){
		echo "v = 1 ou 2 ou 7";
	}else{
		echo "v é diferente de 1 ou 2 ou 7";
	}
	
	#Laços de repetição
	//FOR incremento de 1
	for($i = 0; $i <= 10; $i++){
		echo $i . '<br>';
	}
	
	echo "<br>";
	
	//FOR incremento de 2
	for($i = 0; $i <= 10; $i = $i+2){
		echo $i . '<br>';
	}
	
	echo "<br>";
	
	//FOR incremento interno 
	for($i = 0; $i <= 10; $i = $i+1){
		$i = $i+1;
		echo $i . '<br>';
	}
	
	
	//FOR decremento
	for($i = 10; $i >= 0; $i--){
		echo $i . '<br>';
	}
	
	echo "<br>";
	
	
	//FOR continue
	for($i = 0; $i <= 10; $i++){
		if($i == 4){continue;}
	}
	
	//FOR break
	for($i = 0; $i <= 10; $i++){
		if($i == 8){break;}
	}
	
	#WHILE

	$i = 0;
	while ($i <= 10){
		echo $i;
		echo "<br>";
		$i++;
	}

	
	#DO WHILE

	$i = 0;
	do {
		echo $i;
		echo "<br>";
		$i++;
	} while($i <= 10);
	
	
	#MOD
	function imparPar($v){
		if($v % 2 == 0) {
			echo "$v é par";
		} else {
			echo "$v é impar";
		}
	}
	
	imparPar(40);
	*/
	
	/*
	function primo($v){
		if($v == 1 || $v == 2){
			return true;
		}
		
		$contador = 0;
		
		for($i = $v; $i > 1; $i--){
			if($v % $i == 0){
				$contador++;
			}
		}
		if($contador == 1){
			return true;
		}else{
			return false;
		}
	}
	
	/*if(primo(4)){
		echo 'primo';
	}else{
		echo 'não é primo';
	}*/
	
	/*
	for($i = 1; $i <= 1000; $i++){
		if(primo($i)){echo $i . "<br>";}
	}
	*/

	
?>