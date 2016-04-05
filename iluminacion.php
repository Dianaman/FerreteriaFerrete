<html>
<head>
	<title>Ferreteria Ferrete: Iluminación</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	<link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>
	<h1>Ferretería Ferrete</h1>
	<h2>Departamento de Iluminación</h2>
	<form method="POST">
		<label>Ingrese cantidad de lámparas:
		<input type="text" name="cant"></input></label>
		<label>Ingrese marca:
		<input type="text" name="marca"></input></label>
		<input type="submit" value="Calcular" class="button"></input>
	</form>

	<?php
		echo var_dump($_POST) . "<br>";
		@$c = $_POST["cant"];
		@$m = $_POST["marca"];

		
		
	?>
</body>
</html>