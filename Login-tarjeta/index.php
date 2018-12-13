<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])){
  	$records = $conn-> prepare('SELECT id, email, password FROM users WHERE id = :id');
  	$records -> bindParam(':id', $_SESSION['user_id']);
  	$records-> execute();
  	$results = $records-> fetch(PDO::FETCH_ASSOC);

  	$user = null;

  	if(count($results) > 0) {
  		$user = $results;
  	}
  }

  ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> ¡Bienvenido! </title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <img src="imagenes/pacman3.gif" width="200" height="200" class="center">

	<h1>Por Favor Inicia sesión o Registrate! </h1>


	<a href="login.php"> Inicia Sesión </a> o
	<a href="signup.php"> Registrate </a>
    
</body>
</html>