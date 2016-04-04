<html>
<head>
	<title>Ferreteria Ferrete: Construcción</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	<link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>
	<h1>Ferretería Ferrete</h1>
	<h2>Departamento de Construcción</h2>
	<form method="POST">
		<label>Ingrese el largo: 
		<input type="text" name="uno"></input></label>
		<label>Ingrese el ancho:
		<input type="text" name="dos"></input></label>
		<input type="submit" name="rectangular" value="Alambrar" class="button"></input>

		<br><br>
		<label>Ingrese el radio:
		<input type="text" name="tres"></input></label>
		<input type="submit" name="circular" value="Alambrar" class="button"></input>

		<br><br>
		<input type="submit" name="cementocal" value="Calcular cemento y cal" class="button"></input>
		<br><br>
	</form>

	<?php
		var_dump($_POST);

		if(isset($_POST['rectangular'])){
			echo ($_POST["uno"] * $_POST["dos"])*3;
		}
		if(isset($_POST['circular'])){
			echo ($_POST["tres"]*2*3.14)*3;
		}
		if(isset($_POST['cementocal'])){
			if(isset($_POST["uno"]) && isset($_POST["dos"])) {
				$per = $_POST['uno'] * $_POST['dos'];
				echo "Cemento: " + $per * 2 + " bolsas.<br>";
				echo "Cal: " + $per * 3 + " bolsas.";
			}
			elseif (isset($_POST["tres"])){
				echo "Cemento: " + $_POST["tres"] * 2 + " bolsas.<br>";
				echo "Cal: " + $_POST["tres"] * 3 + " bolsas.";
			}
		}
	?>
</body>
</html>