<?php 

echo '#########DECISAO COM IF####################<br>';

    //VARIAVEL COM VALOR 1
    $v = 1;

    //SE O VALOR VA VARIAVEL v FOR IGUAL A UM EXECUTA O COMANDO
    if ($v == 1) {
        
        //IMPRIME NA TELA 
        echo 'for funfou';

    };

echo '<br>###############################################<br>';

echo '<BR>#########DECISAO COM IF ELSE##############<br>';

     //VARIAVEL COM VALOR 1
     $v = 1;

     //SE O VALOR VA VARIAVEL v FOR DIFERENTE A UM EXECUTA O COMANDO
     if ($v != 1) {
         
         //IMPRIME NA TELA 
         echo 'for funfou';
 
         //SE O VALOR VA VARIAVEL v FOR IGUAL A UM EXECUTA O COMANDO
     } else if ($v == 2) {

        //IMPRIME NA TELA
        echo "v = 2";
        
        //SE NÃO
     } else {
        
        //IMPRIME NA TELA
        echo 'Diferente de 1 e 2';
     
    }
echo '<br>###############################################<br>';

echo '<BR>#######DECISAO COM IF ELSE COM OU (||)  #######<br>';

    //VARIAVEL COM O VALOR 23
    $v2 = 23;

    //SE v2 FOR IGUAL A 1 OU 2 OU 3 EXECUTA O COMANDO
    if ($v2 == 1 || $v2 == 2 || $v2 == 7) {

        //IMPRIME NA TELA
        echo 'v = 1 ou 2 ou 7';

        //SE NÃO
    } else {

        //IMPRIME NA TELA
        echo 'v é diferente de 1 2 ou 7';

    } 
echo '<br>###############################################<br>';
echo '<BR>#######COMANDO DE REPETIÇÃO FOR#######<br>';

    //if ($i == 4) {contiunue;}
    //if ($i == 4) {break;}

    for ($i = 0; $i <= 10 ; $i ++ ) { 
        echo $i. "<br>";
    }
echo '<br>###############################################<br>';
echo '<BR>#######COMANDO DE REPETIÇÃO WHILE#######<br>';

    $i = 0;

    while ($i <= 10) {
        echo $i;
        echo "<br>";
        $i++;
    }

echo '<br>###############################################<br>';
echo '<BR>#######COMANDO DE REPETIÇÃO DO WHILE#######<br>';

    $i = 0;
    do {
        echo $i;
        echo "<br>";
        $i++;
    } while ($i <= 0);

echo '<br>###############################################<br>';
echo '<BR>####### operador % #######<br>';

    function imparPar ( $vloko) {
        if ($vloko % 2 == 0){
            echo "$vloko é par";

        }else {
            echo "$vloko é impar";
        }
    }

    imparPar(170);

echo '<br>###############################################<br>';
echo '<BR>####### NUMEROS PRIMOS COM OPERADOR % #######<br>';

    function primo ($k) {
        if ($k == 1 || $k ==2){
            return true;
        }

        $contador = 0;

        for ($i = $k; $i > 1 ; $i--) { 
            if ($k % $i == 0 ){
                $contador++;
            }
        }

        if ($contador == 1){
            return true;
        } else {
            return false;
        }
    }

    for ($i=1; $i <= 1000; $i++) { 
        if(primo($i))
        {echo $i . '<br>';}
    }





?>