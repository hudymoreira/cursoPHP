<?php
	function primo($v) {
		for ($i = 0; $i <= $v; $i++) {
			if ($i % $v == 1) {
				echo "numero " .$i . " é primo ".$v;
				echo "<br>";
			}else {
				echo "numero " .$i . " não é primo ".$v;
				echo "<br>";
			}
		}
	}
	primo(10)


	/*
	$i = 0;
	do{
		echo $i;
		echo "<br>";
		$i++;
	}
	while ($i < 10);

	
	$i = 0;
	while ($i <= 10) {
		echo $i;
		echo "<br>";
		$i++;
	}
	
	
	
	for($i = 0; $i == 10 ; $i = $i++) {
		for($j = 0; $j <= 5 ; $j++) {
			echo "$i . $j";
			echo "<br>";
		}
	}





	for($i = 0; $i <= 100 ; $i = $i + 1) {
		if ($i == 9) { continue; }
		echo $i;
		if ($i == 30) { break; }
		echo "<br>";
	}
	
	
	$valor = 100;
	function parImpar($valor) {
		if($valor % 2 == 0) {
			echo $valor . " é par <br/>";
		} else {
			echo $valor . " é impar 1 <br/>	";
		}
	}
	
	function parImpar($valor) {
		if($valor % 2 == 0) {
			echo $valor . " é par";
		} else {
			echo $valor . " é impar 1";
		}
	}
	parImpar(42);
	
	#  Estrutura IF - ELSE IF - ELSE
	$valo1 = 2;
	if($valo1 == 1 || $valo1 == 2) {
		echo "valor1 é igual a 1 ou 2";
	} else {
		echo "valor1 é diferente de 1 ou 2";
	}
		
	
	
	$valor = -1;
	if ($valor == 1) {
		echo "valor = 1";
	}
	else if($valor == 2) {
		echo "Valor igual a 2";
	}
	else {
		echo 'valor diferente de 1 e 2';
	}
	*/
?>