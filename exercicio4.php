<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 4</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h2>Exercício <span>4</span></h2>
	<form method="post">
		<input type="number" name="n1" placeholder="Primeiro numero">
		<input type="number" name="n2" placeholder="Segundo numero">
		<input type="number" name="n3" placeholder="Terceiro numero">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br>
	<?php  
		if(isset($_POST['enviar'])){
			$n1 = @$_POST['n1'];
			$n2 = @$_POST['n2'];
			$n3 = @$_POST['n3'];
			$resultado = ($n1 + $n2 + $n3)/$n3;
			echo "<div class='card'><b>Resultado de ($n1 + $n2 + $n3) / $n3 = </b> <b style='color: red;'>".$resultado."</b></div>";
		}
	?>
	<br>
	<div class="controls">
		<a href="exercicio3.php">< voltar</a>
		<a href="exercicio5.php">proximo ></a>
	</div>
</body>
</html>