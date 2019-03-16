<?php

	#Decisão
	/*
	$v = 1;
	
	if($v != 1){
		echo "V é diferente 1";
	}else{
		echo "V é igual a 1<br>";
	}
	
	$v = 2;
	
	if($v == 1){
		echo "V é diferente 1";
	}else{
		echo "V é igual a 1<br>";
	}
	
	$v = 1;
	
	if($v == 5){
		echo "V é diferente 1";
	}else if($v == 2){
		echo "V é igual a 1";
	}else{
		echo "diferente de 1 e 2";
	}
	
	
	$v = 23;
	if ($v == 1 || $v == 2 || $v == 7){
		echo "v é igual a 1 ou 2 ou 7";
	}else{
		echo "v é diferente de 1 ou 2 ou 7";
	}
	*/
	
	
	/*
	# Laços de repetição
	 //incremento de 1
	for($i = 0; $i <= 10; $i = $i +1){
		echo "numero = $i" . $i;
		echo "<br>";
	}

	 //incremento de 2
	for($i = 0; $i <= 10; $i = $i +2){
		echo "numero = $i" . $i;
		echo "<br>";
	}
	
	 // incremento interno
	for($i = 0; $i <= 10; $i = $i +1){
		echo "numero = $i" . $i;
		$i = $i +2;
		echo "<br>";
	}
	*/
	/*
	 //decremento
	for($i = 10; $i >= 0; $i--){
		echo "numero = $i" . $i;
		echo "<br>";
	}
	
	
	for($i = 0; $i<= 10; $i++){
		if ($i == 4){continue;}
		if ($i == 8) {break;}
		
		echo "<br>";
	}
	*/
	
	/*
	$i = 0;
	while ($i <= 10){
		echo $i;
		echo "<br>";
		$i++;
	}
	*/
	
	/*
	$i = 0;
	do{
		echo $i;
		echo"<br>";
		$i++;
	}while($i <=0);
	*/
	
	/*
	function imparPar($v){
		if ($v % 2 == 0){
			echo "$v é par";
		}else{
			echo "$v é impar";
		}
	}
	imparPar(8);
	*/
	
	function primo($v){
		if ($v == 1 || $v == 2){
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
	for ($i = 1; $i <= 100; $i++){
		if(primo($i)){echo $i . "<br>";}
	}
	
	
	
	?>	