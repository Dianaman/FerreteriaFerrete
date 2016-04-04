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
		<input type="text" name="uno"></input></label>
		<label>Ingrese un segundo valor:
		<input type="text" name="dos"></input></label>
		<label>Ingrese un tercer valor:
		<input type="text" name="tres"></input></label>
		<br><br>
		<input type="submit" name="suma" value="Sumar" class="button"></input>
		<input type="submit" name="prom" value="Promediar" class="button"></input>
		<input type="submit" name="final" value="Final" class="button"></input>
	</form>

	<?php
		//var_dump($_POST);

		if(isset($_POST['suma'])){
			echo $_POST["uno"] + $_POST["dos"] + $_POST["tres"];
		}
		if(isset($_POST['prom'])){
			echo ($_POST["uno"] + $_POST["dos"] + $_POST["tres"])/3;
		}
		if(isset($_POST['final'])){
			echo ($_POST["uno"] + $_POST["dos"] + $_POST["tres"])*1.21;
		}
	?>
</body>
</html>