<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 1</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h2>Exercício <span>1</span></h2>
	<form method="post">
		<input type="text" name="nome" placeholder="Seu nome" autocomplete="off">
		<input type="number" name="ano" placeholder="Seu ano de nascimento" autocomplete="off">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php  
		if(isset($_POST['enviar'])){
			$nome = @$_POST['nome'];
			$ano = @$_POST['ano'];
			$nome = str_replace(" ", "", $nome);
			$juncao = strrev($nome.$ano);
			$embaraca = str_shuffle($juncao);
			$senhaGerada = substr($embaraca, 0, 10);
			echo "<div class='card'><b>Senha gerada:</b> <b style='color: red;'>".$senhaGerada."</b></div>";
		}
	?>
	<br>
	<div class="controls">
		<a href="exercicio2.php">proximo ></a>
	</div>
</body>
</html>