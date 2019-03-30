<?php

function primo($v){
	if ($v == 1 || $v == 2){
		return true;
	} 
	$contador = 0;
	for($i = $v ; $i > 1; $i--){
		if ($v % $i == 0){
			$contador++;	
		}
	}	
	 if ($contador == 1){
		return true;
	 } else {
		 return false;
	 }
}


for ($i = 1; $i <= 10000; $i++  ){
	if(primo($i)){echo $i . "<br>";}
}

/*//
function imparPar($v){
	if ($v % 2 == 0){
		echo "$v é par";
	}else {
		echo "$v é impar";
	}
}

imparPar(170);
/*
$i = 0;
do {
	echo $i;
	echo"<br>";
	$i++;
}while($i <=0);

/*
$i = 0;

while ($i <= 10){
	echo $i;
	echo "<br>";
	$i++;
	
}



/*
for ($i = 0; $i<= 10; $i++){
	if ($i == 4){continue;}
	if ($i == 8){break;}
	
	
	echo " numero = $i " . $i;
	echo "<br>";
}
/*


/*



/*

$v = 23;
if ($v == 1 || $v == 2 || $v == 7){
	echo "v = 1 ou 2 ou 7";
} else {
		echo "v é diferente de 1 ou 2 ou 7";
}
	

/*
$v = 23;
if ($v == 1){
	echo "v = 1";
} else if ($v == 2) {
	echo "v = 2";
} else {
	echo "diferente de 1 e 2";
}

*/
?>

