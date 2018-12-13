<?php
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])){
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare ($sql);
	$stmt ->bindParam(':email', $_POST['email']);
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt ->bindParam(':password', $password);

	if ($stmt -> execute()){
		$message = 'Te has registrado correctamente';
	} else {
		$message = 'Lo sentimos, ah ocurrido un error!';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Registrarse</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<?php require 'partials/header.php'?>

    <img src="imagenes/registro.png" width="200" height="200" class="center">

	<?php if(!empty($message)): ?>
	<p><?= $message ?></p>
    <?php endif; ?>

	<h1>¡Registrate!</h1>
	<span> o <a href="login.php"> Inicia Sesión </a></span>
	<form action="signup.php" method="post">
		<input type="text" name="email" placeholder="Ingresa tu correo">
		<input type="password" name="password" placeholder="Ingresa tu contraseña">
		<input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
		<input type="submit" value="Registrarse">
	</form>
</body>
</html>