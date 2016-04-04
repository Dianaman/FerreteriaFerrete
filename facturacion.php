<html>
<head>
	<title>Ferreteria Ferrete: Facturación</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	<link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>
	<h1>Ferretería Ferrete</h1>
	<h2>Departamento de Facturación</h2>
	<form method="POST">
		<label>Ingrese un primer valor: 
		<input type="text" name="num1"></input></label>
		<label>Ingrese un segundo valor:
		<input type="text" name="num2"></input></label>
		<label>Ingrese un tercer valor:
		<input type="text" name="num3"></input></label>
		<br><br>
		<input type="submit" value="Sumar" class="button"></input>
		<input type="submit" value="Promediar" class="button"></input>
		<input type="submit" value="Final" class="button"></input>
	</form>

	<?php
		var_dump($_POST);
	?>
</body>
</html>