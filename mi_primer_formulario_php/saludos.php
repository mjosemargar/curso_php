<?php include ('includes/header.php');?> 
	<div class='container'>
		<form method='post' action='procesar_saludos.php'>
			<label for='nombre' > Nombre </label>
			<input name='nombre' type="text" placeholder="Escribe tu nombre" required>
			<label>  Email
				<input name='email' type='email' placeholder="Escribe tu email" required>
			</label>
			<label for='poblacion'> Población </label>
			<input name='poblacion' type='text' placeholder="Escribe tu ciudad" required>
			<br/><br/>
			<button class='btn btn-primary' type='submit'> Enviar </button>
		
		</form>
		</div>
<?php include 'includes/footer.php';?>