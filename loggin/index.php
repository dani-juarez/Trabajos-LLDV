<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="este es un ejemplo">
<meta name="author" content="">
<title>501</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body bgcolor= #85929E>
	<main role="main">
	<div class="jumbotron">
	<div class="container">

<h1 class="display-3"><center>FORMULARIO DE REGISTRO</center></h1>

</div>
</div>
</main>
	
	<center>
		<form action ="db_insertar.php" method="POST" enctype="multipart/form-data">
			
			<br>
			<br>
			


			<table>
<tr>
<td>
			<div><label for="id"><b>IDENTIFICACION</b></label>
				<input type="number" name="id" required placeholder="ingrese la matricula">
			</div>
			<table>
</tr>
</td>
<br>
<table>
<tr>
<td>
			<div><label for="nombre"><b>NOMBRE</b></label>
            <input type="text" name="nombre" required placeholder="ingrese usuario">
			</div>
			<table>
</tr>
</td>
			<br>

			<div><label for="foto"></label>
				<input type="file" name="foto" required>

			</div>
             <br>
			<center><button type="sumit" name="registrar">REGISTRAR</button></center>
		</form>
			

	</center>
</body>
</html>