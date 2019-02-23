<?php
	
	//COMANDO ## echo 'O QUE VOCÊ DESEJA PRINTAR'; ##, TEM A FUNÇÃO DE COMENTAR NA TELA 
	
	/* TIPOS DE VARIAVEIS 
	
		String        = texto
		Integer/ int  = numero inteiro
		bollean       = logico
		float/ double = real
		
		
	
	*/
	
	#Comentario e linha
	//Comentario em linha
	/*Comentario em bloco*/
	
	/* COMANDO FOR (LOOP)
	for ($i = 0; $i <= 100; $i++){	
	
		echo '<br>ola' . $i;
	
	}
	*/
	
	/*fORMAS DE ATRIBUIÇÕE DE STRINGs
	$valor = 'Olá mundo';
	$valor = 16 ;
	$valor = 'Olá mundo' . 16;
	$valor = 'B';
	$valor = (15 - 5) * 2 + 5;
	//$valor = new Class();
	$valor = 18.36;	
	*/
	
	
	//$variavel  = 'hudy';
	
	
	$v1 = $_GET['valor1'];
	$v2 = $_GET['valor2'];
	
	echo $_GET['valor1'] + $_GET['valor2'];
	
	
?>