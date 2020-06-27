<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Documento </title>
</head>
<body>
	<?php
		//Atribuição
		$num = 10;

		//Atribuiçaõ e adiçaõ 
		//$num = $num + 1;

		$num = 10;
		$num += 1;
		echo "<p> O valor da soma é $num. </p>";

		//Atribuiçaõ e subtração
		//$num = $num - 1;

		$num = 10;
		$num -= 1;
		echo "<p> O valor subtraido é $num. </p>";

		//Atribuiçaõ e multiplicação
		//$num = $num * 1;

		$num = 10;
		$num *= 1;
		echo "<p> O valor multiplicado é $num. </p>";

		//Atribuiçaõ e divisão
		//$num = $num / 1;

		$num = 10;
		$num /= 1;
		echo "<p> O valor dividido é $num. </p>";

		//Atribuiçaõ e módulo
		//$num = $num % 3;

		$num = 10;
		$num %= 3;
		echo "<p> O valor do módulo é $num. </p>";

		//Atribuiçaõ e concatenação
		//$texto = "Olá" . "Mundo";

		$texto = "Olá " ;
		$texto .= " Mundo ";
		echo "<p> O valor da concatenação é $texto. </p>";
	?>
</body>
</html>