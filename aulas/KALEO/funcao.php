<?php 
    echo "<br>----------------AULA SOBRE FUNÇÕES------------------<br>";
    echo "<br>-------------------------------------------------------------------<br>";
    //DECLARANDO FUNÇÃO
    //function nomeDaFuncao(){}

    //FUNÇÃO COM PARAMETRO
    
    function bomDia($nome, $snome){
        echo "Bom dia" . $nome . $snome;
    }

    bomDia(" Kaleo", " Vieira");

    echo "<br>-------------------------------------------------------------------<br>";

    //FUNÇÃO QUE ENVIA ALGUM DADO PARA UMA VARIAVEL

    function quadrado($numero){
        return $numero * $numero;
    }

    $resposta = quadrado(10);

    echo $resposta;

    echo "<br>";

    //PRINTANDO A RESPOSTA DA FUNÇÃO DIRETO!
    
    echo quadrado(5);

    echo "<br>-------------------------------------------------------------------<br>";

    //FUNÇÃO CALCULAR IMC

    function IMC($peso, $altura){
        return $peso / ($altura * $altura);
    }

    $number = IMC(90, 1.82);
    //echo IMC(90, 1.82);
    
    //FORMATA O VALOR PARA PEGAR APENAS DUAS CASAS DECIMAIS
    $valorFormatado = number_format($number, 2, '.', '');
    
    echo $valorFormatado;

    echo "<br>-------------------------------------------------------------------<br>";

    //FUNÇÃO DE CALCULAR CIRCUNFERENCIA

    function circu($valor){
        $pi = 3.14159;
        return 2 * $pi * $valor;
    }

    /*//IMPRIME O VALOR DIRETO SEM FORMATAÇÃO
    echo circu(26);*/

    $number2 = circu(26);    
    
    //FORMATA O VALOR PARA PEGAR APENAS DUAS CASAS DECIMAIS
    $valorFormatado2 = number_format($number2, 2, '.', '');
    
    echo $valorFormatado2;

    echo "<br>-------------------------------------------------------------------<br>";

    //FUNÇÃO RECURSIVA

    function potencia($base, $expoente){
        if ($expoente==0){
            return 1;
        } else {
            return $base * potencia($base, $expoente - 1);
        }
    }

    echo potencia(3,3);

    echo "<br>-------------------------------------------------------------------<br>";
?>