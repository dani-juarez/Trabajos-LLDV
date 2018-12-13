<!DOCTYPE html>
<html>
<head>
	<title>Paquetes</title>
	<link href="https://fonts.googleapis.com/css?family=Century Gothic" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php require 'partials/cerrar.php' ?>

<h3>Seleccione el paquete que desee!</h3>

	<?php if(!empty($user)): ?>
		<br> Bienvenido. <?= $user['email'] ?>
		<br> Acceso Correcto
		<a href="index.php"> Cerrar Sesión </a>

    <?php require 'tarjeta.php'?>

		<?php else: ?>

			<?php endif; ?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Conten-Type" content="text/html; charset=iso-8859-1"/>
<title>PAQUETES</title>
<body bgcolor= #fffff>
<style type="text/css">
body{text-align: center;padding-top: 10px;}
#caja master{
	position: relative;
	margin: 0 auto;
	height: 50px;
	width: 100%;
	background-color:#ffffff;
	border: 1px solid #3498DB;
	 }
#absoluta{
	position:
	bottom: 0;
	right: 50px;
	height: 50px;
	width: 120px;
	background-color: #40FF00;
	border:1px solid #80BC3A;
	margin-bottom: 30px;
}

</style>
</head>
<body>
	<img src="imagenes/tiempo.jpg" width="550" height="150" class="right">
	<br>
	<br>
	<br>
	<table>
		<td><th>
	<div id="absoluta">
		<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $10</p>
	</div></td></th>
	<td><th>
	<div id="absoluta">
		<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $20</p>
	</div></td></th>
	<td><th>
	<div id="absoluta">
		<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $30</p>
	</div></td></th>
	<td><th>
	<div id="absoluta">
		<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $50</p>
	</div></td></th>
	<td><th>
	<div id="absoluta">
		<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $70</p>
	</div></td></th>
	<td><th>
	<div id="absoluta">
	<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $100</p>
	</div></td></th>
	<td><th>
    <div id="absoluta">
	<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $200</p>
	</div></td></th>
	<td><th>
	<div id="absoluta">
	<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $300</p>
	</div></td></th>
	<td><th>
	<div id="absoluta">
	<a link href="tarjeta.php"><p style="padding: 10px: font:16px arial; color: #000000;">Recarga $500</p>
	</div></td></th>
	</div>
</table>
<div id="absoluta">
    <a link href="compañia.php"><p style="padding: 10px: font: 16px arial; color: #000000; position: center;">Atras </p>
    </div>
</body>
</html>