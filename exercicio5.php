<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 5</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<h2>Exercício <span>5</span></h2>
	<form method="post">
		<input type="number" name="n1" placeholder="Primeiro numero">
		<input type="number" name="n2" placeholder="Segundo numero">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php  
		if(isset($_POST['enviar'])){

			$n1 = @$_POST['n1'];
			$n2 = @$_POST['n2'];

			echo "<div class='card'>";
			echo "<b>Soma de $n1+$n2=</b> <b style='color: red;'>".($n1+$n2)."</b><br>";
			echo "<b>Divisão de $n1/$n2=</b> <b style='color: red;'>".($n1/$n2)."</b><br>";
			echo "<b>Multiplicação de $n1*$n2=</b> <b style='color: red;'>".($n1*$n2)."</b><br>";
			echo "<b>Subtração de $n1-$n2=</b> <b style='color: red;'>".($n1-$n2)."</b><br>";
			echo "</div>";

		}
	?>
	<br>
	<div class="controls">
		<a href="exercicio4.php">< voltar</a>
	</div>
</body>
</html>