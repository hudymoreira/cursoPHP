<?php
// ----------------- TESTANTO OS OPERADORES -----------------

/*$i = 42;
if ($i == 13 || $i == 50 || $i == 78){
    echo "i= 13 ou 50 ou 78 ";
}
else{
    echo "O valor é: $i" ;
}

$v = 13;
if ($v == 1){
    echo "v = 1";
}
else {
    echo "Não é igual bahia";
}*/

// ----------------- LOOP COM FOR -----------------

/*for ($i = 0; $i <= 10; $i++){
    if ($i == 3){continue;} //JUMP O STATEMENT
    if ($i == 2){break;} //DA KILL NO FOR 
    echo $i;
    echo "<br>";
}*/

// ----------------- LOOP COM WHILE -----------------

/*$i = 0;

while ($i <=10){
    echo $i;
    echo "<br>";
    $i++;
}

do{
    echo $i;
    echo "<br>";
    $i ++; 
}while($i<=0);*/

// ----------------- MOD -----------------

/*function I_P($ip){
    if($ip % 2 == 0){
        echo "O número: $ip é par";
    }
    else{
        echo "O número: $ip é impar";
    }
}
I_P(13);*/

/*function primo ($v){
    if ($v == 1 || $v == 2){
        return true;
    }
    $contador =0;
    for ($i = $v; $i >1; $i--){
        if ($v % $i ==0){
            $contador++;
        }
    }
    if ($contador ==1){
        return true;
    }
    else{
        return false;
    }
}
for ($i = 1; $i <=1000; $i++){
    if (primo($i)){echo $i . "<br>";}
}*/

?>