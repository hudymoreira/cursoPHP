<?php 
    echo 'TRABALHANDO COM ARRAYS <br>';

        /*USOS DO ARRAY
        echo count($Variavel);//IMPRIME O TAMANHO DA VARIAVEL
        print_r($variavel);//MOSTRA O QUE TEM DENTRO DO ARRAY
        */

    echo '---------------------------------------------------------------------------------- <br>';

        echo 'ARRAY SIMPLES NUMERICO <br>';
       
        $var0 = array(12, 18, 32, -16, 45, 17,18);
       
        echo $var0[0] . '<br>';//IMPRIME 12
        
        echo 'USANDO FOREACH PARA MOSTRAR O ARRAY <br>';
        
        foreach($var0 as $i){

            echo $i . '<br>';
        }
        
    echo '---------------------------------------------------------------------------------- <br>';

        echo 'FAZENDO SOMA COM ITENS DO ARRAY <br>';
    
        echo $var0[3] + $var0[0].'<br>';
    
    echo '---------------------------------------------------------------------------------- <br>';

                echo 'ARRAY SIMPLES COM PALAVRAS <br>';

        $var1 = array("Batata", "Cavalo", "Couve", "Carro");
        
        echo $var1[2]."<br>";//IMPRIME COUVE

                //ARRAY SIMPLES MISTO

        $var2 = array(1, "Batata", "Casa", 17);
        echo $var2[3]."<br>";//IMPRIME 17

    echo '---------------------------------------------------------------------------------- <br>';

                echo 'ARRAY MULTIDIMENSIONAL <br>';

        $var3 = array(
            array(1,2,3,4,5,6),
            array("Casa", "Carro", "Moto"),
            array(1, 2, "Carro", "Moto")
        );

        echo $var3 [1][1]."<br>";//IMPRIME CARRO DO DA SEGUNDA DIMENSÃO DO ARRAY
        
    echo '---------------------------------------------------------------------------------- <br>';
                echo 'ARRAY ASSOCIATIVO <br>';
                
        $var4 = array(
            "Nome"     => "Kaleo",
            "SNome"    => "Vieira",
            "Telefone" => "999999999",
            "Idade"    => 20,
            "Peso"     => 70,
            "Altura"   => 1.70
        );

        echo $var4 ["SNome"]."<br>";/*IMPRIME O SOBRENOME SALVO, O INDICE É CAHAMADO
        PELO NOME COLOCADO NO INDICE NO CASO "SNome"*/

    echo '---------------------------------------------------------------------------------- <br>';
    
                echo 'ARRAY ASSOCIATIVO MULTIDIMENSIONAL <br>';

        $var4 = array(
        array(
            "Nome"     => "Kaleo",
            "SNome"    => "Vieira",
            "Telefone" => "999999999",
            "Idade"    => 20,
            "Peso"     => 70,
            "Altura"   => 1.70
        ),
        array(
            "Nome"     => "Willian",
            "SNome"    => "Nascimento",
            "Telefone" => "999999999",
            "Idade"    => 20,
            "Peso"     => 70,
            "Altura"   => 1.70
        ),
        array(
            "Nome"     => "Rafael",
            "SNome"    => "Diniz",
            "Telefone" => "999999999",
            "Idade"    => 20,
            "Peso"     => 70,
            "Altura"   => 1.70
        ));

        echo $var4[1]["Telefone"].'<br>';//IMPRIME O TELEFONE DO WILLIAN
    echo '---------------------------------------------------------------------------------- <br>';
?>