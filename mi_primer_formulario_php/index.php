<?php include ('includes/header.php');?> 
	<div class='container'>
		<form method='post' action='procesar.php'>
		<label for='nombre' > Nombre </label>
		<input name='nombre' type="text" placeholder="Escribe tu nombre" required>
		<label> Contraseña
		<input name='password' type='password' placeholder="Escribe tu contraseña" required>
		</label>
		<button> Enviar </button>
		
		</form>
		</div>
<?php include 'includes/footer.php';?>