<?php
	/*$a = 2;
	if ($a === 1){
		echo "a é exatamente igual a 1.";
	}
	else if ($a !== 1){
		
		echo "a é exatamente diferente de 1.";
		
	}
	else{
	
		echo "I don't know wtf just happened.";
	
	}*/
	
	/*for($i = 0; $i <= 100; $i++){
		
		echo "A variavel i é igual a ". $i;
		echo  "<br>";
		
	}*/
	
	function imparPar($v){
		
		if($v % 2 == 0){
			
			echo "O numero $v é par";
			
		}
		else{
			
			echo "O numero $v é imparpar";
			
		}
		
	}
	
	function primo($v){
		
		if($v == 1 || $v == 2){
			return true;			
		}
		$contador = 0;
		
		for ($i = $v; $i > 1; $i--){
			
			if($v % $i == 0){
				
				$contador++;
				
			}
		}
		if ($contador == 1){
			
			return true;
			
		}
		else{
			
			return false;
			
		}
	}
	
	$retorno = primo(7);
	for ($i = 1; $i <= 1000; $i++){
		
		if (primo($i)){echo "$i <br>";}
		
	}
	
?>