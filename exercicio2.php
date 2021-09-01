<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 2</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h2>Exercício <span>2</span></h2>
	<form method="post">
		<input type="text" name="frase" placeholder="Digite a frase" autocomplete="off">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php  
		if(isset($_POST['enviar'])){
			$frase = @$_POST['frase'];
			$palavras_proibidas = array("cu", "arrombado", "porra");
			$mensagem = $frase;
			$mensagemFiltrada = str_replace($palavras_proibidas, "<i>[<b style='color: red;'>censurado</b>]</i>", $mensagem);
			echo "<div class='card'><b>Frase:</b> ".$mensagemFiltrada."</div>";
		}
	?>
	<br>
	<div class="controls">
		<a href="index.php">< voltar</a>
		<a href="exercicio3.php">proximo ></a>
	</div>
</body>
</html>