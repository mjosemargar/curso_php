<!DOCTYPE html>
<!--Mostraremos una serie de mensajes en la página empleando el comando echo y print, .
Deberemos crear un archivo con extensión php,
Una estructura básica de documento html
Dentro de etiquetas de bloque php encerrar nuestro código php Tenga en cuenta:
cuando utiliza el comando echo, los mensajes pueden ir entre comillas dobles o simples.
Toda instrucción finaliza con punto y coma.
Incorporar dentro de la orden echo un string que incorpore etiquetas html
Incorporar la orden echo dentro un atributo html-->
<html>
<head>
	<meta charset='UTF-8'>
	<title> Primer ejercicio en PHP </title>
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
	<?php
		echo "<h1>Hola</h1>";
		echo '<br>';
		/* No quiere que utilizemos <br/> con html. Debemos escribir <br> por se html5*/
		print "Rehola";
		print '<br>';
		print 'Escrito';
		echo '<br>';
		/* Definición de variables*/
		$nombre="José Antonio Cano";
		$edad="47";
		echo $nombre;
		echo $edad;
		echo '<br>';
		echo 'Mi nombre es $nombre y tengo $edad años.';
		echo '<br>';
		echo "Mi nombre es $nombre y tengo $edad años.";
		echo '<br>';
		echo "Mi nombre es ".$nombre." y tengo ".$edad." años. <br>";
	?>
	
</body>
</html>