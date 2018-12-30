<!DOCTYPE html>
<html>
	<head>
		<title>loggin</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>

	<body>
		
		<div class="form">
			<form action="db_insertar.php" method="POST" enctype="multipar/form-data">
				<img src="imagen/pac.jpg" width"200" alt="">
				<p>REGISTRAR</p>
				<label for="nombre">Nombre De Usuario</label>
				<br>
				<input type="text" name="nombre" value="" placeholder="Nombre" required>
				<br>
				<p>CORREO</p>
				<label for="correo">DIRECCION DE CORREO </label>
				<br>
				<input type="email" name="email" value="" placeholder="correo@gmail.com" required>
				<br>
				<br>
				<p>CONTRASEÑA</p>
				<label for="contrasena">CONTRASEÑA </label>
				<br>
				<input type="password" name="contrasena" value="" placeholder="Contraseña" required>
				<br>
				<br>
				<form action="paquetes.php" method="POST" enctype="multipar/form-data">
				<input type="submit" value="Entrar">

			</form>
		</div>
	</body>
</html>