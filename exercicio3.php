<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 3</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h2>Exercício <span>3</span></h2>
	<form method="post">
		<input type="text" name="nome" placeholder="Seu nome" autocomplete="off">
		<input type="number" name="ano" placeholder="Ano de nascimento">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php  
		if(isset($_POST['enviar'])){
			$nome = @$_POST['nome'];
			$ano = @$_POST['ano'];
			$atual = date('Y');
			$idade = $atual - $ano;
			echo "<div class='card'>Meu nome é <b>".$nome."</b> e tenho <b>".$idade."</b> anos!</div>";
		}
	?>
	<br>
	<div class="controls">
		<a href="exercicio2.php">< voltar</a>
		<a href="exercicio4.php">proximo ></a>
	</div>
</body>
</html>