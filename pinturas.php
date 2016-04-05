<html>
<head>
	<title>Ferreteria Ferrete: Pinturas</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	<link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>
	<h1>Ferretería Ferrete</h1>
	<h2>Departamento de Pinturas</h2>
	<form method="POST">
		<label>Ingrese temperatura en Fahrenheit: 
		<input type="text" name="fahr"></input></label>
		<label>Ingrese temperatura en Celsius:
		<input type="text" name="cels"></input></label>
		<input type="submit" value="Calcular" class="button"></input>
	</form>

	<?php
		echo var_dump($_POST) . "<br>";

		if(isset($_POST['fahr']) && $_POST['fahr']!=""){
			$f = $_POST['fahr'];
			$res = $f - 32;
			echo $f ."º Fahrenheir son ".$res."º Centígrados";
		}
		if(isset($_POST['cels']) &&  $_POST['cels']!=""){
			$c = $_POST['cels'];
			$res = $c + 32;
			echo $c."º Centígrados son ".$res."º Fahrenheit";
		}
	?>
</body>
</html>