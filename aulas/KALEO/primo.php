<?php

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

?>