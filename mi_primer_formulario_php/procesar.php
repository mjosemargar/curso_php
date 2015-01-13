<?php include ('includes/header.php');?> 
	<div class='container'>
		<p> Esta es la pagina de procesado </p>
		<?php
			//Se imprime en pantalla.
			//echo $_POST['nombre'].'<br/>';
			//echo $_POST['password'].'<br/>';
			//Para sólo procesar
			$nombre=$_POST['nombre'];
			$password=$_POST['password'];
			if ($nombre=='usuario1' && $password=='algo') 
			{//echo "$nombre eres el usuario 1";
			header('Location:usuario1.php');
			exit;
			}else
			{header('Location:usuario2.php');
			exit;}
		?>
	</div>
<?php include'includes/footer.php';?>