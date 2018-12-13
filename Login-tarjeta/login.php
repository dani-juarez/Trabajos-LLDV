<?php 

session_start();

if (isset($_SESSION['user_ide'])){
	header('Location: /php-login');
}

 require 'database.php';

 if (!empty($_POST['email']) && !empty($_POST['password'])){
 	$records = $conn -> prepare ('SELECT id, email, password FROM users WHERE email=:email');
 	$records -> bindParam(':email', $_POST['email']);
 	$records ->execute();
 	$results = $records -> fetch(PDO::FETCH_ASSOC);

 	$message = 'Bienvenido';

 	if (count($results) > 0 && password_verify($_POST['password'], $results['password'])){
 		$_SESSION['user_id'] = $results['id'];
 		header("Location: compañia.php");
 	} else {
 		$message = 'Datos incorrectos o No Registrado';
 	}
 }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesión</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<?php require 'partials/header.php' ?>

<img src="imagenes/login.png" width="200" height="200" class="center">

	<h1> ¡Iniciar Sesión! </h1>
	<span> o <a href="signup.php"> Registrate </a></span><br/>
	<?php if (!empty($message)) : ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<form action="login.php" method="post">
		<input type="text" name="email" placeholder="Ingresa tu correo">
		<input type="password" name="password" placeholder="Ingresa tu contraseña">
		<input type="submit" value="Ingresar">



</form>
</body>
</html>