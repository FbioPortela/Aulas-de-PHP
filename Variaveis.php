<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Documento </title>
</head>
<body>
	<?php
	## comentario em linha
	// outro comentario em linha
	/* 
	 Comentario em bloco, qq texto que estiver dentro deles 
	*/
	 // Declaração de variaveis
	$nome = "Fabio Portela";// tipo de string, pois o php eh uma linguagem flexivel, 
					// quando estiver entre aspas eh uma string ou caractrere
	$idade = 25;	// int, mesma semantica acima
	$ativo = true; //tipo boleano, v ou f, caso for falso, aparecera nada no navegador, apenas o true = 1.
	$salario = 3000.00; ///float / double

	//mostrando nome e idade no navegador
	echo "<p>NOME: ".$nome."</p>";
	echo "<p>IDADE: $idade</p>";
	echo "<p>ATIVO: $ativo</p>"; 

	//tem uma funçaõ no php, que tipo de variavel esta declarada
	//echo gettype($ativo);
	?>

	<!-- <p> Nome: <?php
	 //forma de exibir o valor da variavel no navegador
	 echo ($nome);
	 ?> </p>

	 <p> Idade: <?php
	 //forma de exibir o valor da variavel no navegador
	 //outra forma sem o pareneteses
	 echo $idade;
	 ?> </p>

	 <p> Usuário ativo no sistema: <?php
	 //forma de exibir o valor da variavel no navegador
	 //print retorna um valor padrao, tipo retorna no csharp
	 print_r($ativo);
	 ?> </p>

	 <p> Salário: <?php
	 //forma de exibir o valor da variavel no navegador
	 //printf retorna um valor concatenado
	 printf("Seu salário R$ %d", $salario);
	 ?> </p>

	 <hr>

	 <?php

	 //Posso saber qual tipo de dados e varieaveis, atraves da funcao gettype
	 //se é string, int(interger) e etc.
	 echo gettype($ativo);

	 echo "<br>";
	 $ativo = "PHP";

	 echo gettype($ativo)
	 ?>

	 <hr>

	 <?php

	 //Tomar cuidado com (""), ('')
	 //este é atribuido o conteudo das variaveis 
	 echo "<p> Olá $nome, sua idade é $idade, não está ativo $ativo, e seu salário é $salario. </p>";

	 //com aspas simpples, é mostrado os nomes das variaveis e n do conteudo
	 echo '<p> Olá $nome, sua idade é $idade, não está ativo $ativo, e seu salário é $salario. </p>';
	 ?> -->

</body>
</html>