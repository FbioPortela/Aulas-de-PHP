<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Documento</title>
</head>
<body>
	<?php
		//Operadores aritmeticos
		$num01 = 2;	//inteiro
		$num02 = 5;	// inteiro
		$num03 = "10"; //string
		$soma; //esta nulo, esperando resulatdo da soma

		//Adição 
		echo "<h3> Adição </h3>";
		$soma = $num01 + $num02;
		echo "<p> O valor de $num01 + $num02 = $soma </p>";

		$soma = $num01 + $num03;
		echo "<p> O valor de $num01 + $num03 = $soma </p>";

		//@ usado como se fosse o try/catch = usado quando tem erros
		@$soma = 10 + "Olá";
		echo "<p> O valor = $soma </p>";

		//Subtração 
		echo "<h3> Subtração </h3>";
		$soma = $num01 - $num02;
		echo "<p> O valor de $num01 - $num02 = $soma </p>";

		$soma = $num01 - $num03;
		echo "<p> O valor de $num01 - $num03 = $soma </p>";

		//@ usado como se fosse o try/catch = usado quando tem erros
		@$soma = 10 - "Olá";
		echo "<p> O valor = $soma </p>";

		//Multiplicação
		echo "<h3> Multiplicação </h3>";
		$soma = $num01 * $num02;
		echo "<p> O valor de $num01 x $num02 = $soma </p>";

		$soma = $num01 * $num03;
		echo "<p> O valor de $num01 x $num03 = $soma </p>";

		//@ usado como se fosse o try/catch = usado quando tem erros
		@$soma = 10 * "Olá";
		echo "<p> O valor = $soma </p>";

		//Divisão
		echo "<h3> Divisão </h3>";
		$soma = $num01 / 2;
		//&divide; - expressao criada para especificar o simbolo de divisao padrao para todso os usuarios 
		echo "<p> O valor de $num01  &divide; 2 = $soma </p>";

		$soma = $num01 - $num03;
		//&divide; - expressao criada para especificar o simbolo de divisao padrao para todso os usuarios 
		echo "<p> O valor de $num01 &divide; $num03 = $soma </p>";

		//Modulo/ pegue o numero da variavel e pegue o resto da dvisao por 3
		echo "<h3> Módulo </h3>";
		$soma = $num01 % 3;
		echo "<p> O valor de $num01 &divide; 3 resto é $soma </p>";

		$soma = $num01 % $num03;
		echo "<p> O valor de $num01 &divide; $num03 resto é $soma </p>";
	?>
</body>
</html>