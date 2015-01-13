<?php include ('includes/header.php');?> 
	<div class='container'>
		<p> Esta es la pagina de procesado </p>
		<?php
			//Recogo las variables
			$nombre=$_POST['nombre'];
			$email=$_POST['email'];
			$poblacion=$_POST['poblacion'];
			//function sobreMi($nombre,$email,$poblacion){
			//	$saludos="Hola $nombre, tu email es $email y vives en $poblacion <br/>";
			//	return $saludos;
			//}
			include('includes/funciones.php');
			echo '<p>'.sobreMi($nombre,$email,$poblacion).'</p>';
			
		?>
	</div>
<?php include'includes/footer.php';?>