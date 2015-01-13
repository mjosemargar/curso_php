<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Tipos de datos</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
	<?php
		function sobreMi(){
			$nombre='María José';
			$email='sennoramaria@gmail.com';
			$poblacion='Toledo';
			$saludos="Hola $nombre, tu email es $email y vives en $población";
			return $saludos;
}
	echo sobreMi();
?>
</div>
</body>
</html>