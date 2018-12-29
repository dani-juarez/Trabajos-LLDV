<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body <body background="fondo4.jpg">
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
<center><h1>Nuevo Registro</h1></center>
	
	<div><form action="conexion.php" method="POST" onsubmit="return validacion()">
			<center><div class="reg" >
      <center><label>Nombre </label> <input name = "nombre" value="" class="input-48" required/></center>
      <br>
      <center><label>Apellido </label> <input name = "apellido" value="" class="input-48" required/></center>
      <br>
      <center><label>correo </label> <input name = "correo" value="" class="input-48" required/></center>
      <br>
      <center><label>Usuario </label> <input name = "usuario" value="" class="input-48" required/></center>
      <br>
      <center><label>Contraseña </label> <input name = "contrasena" value="" class="input-48" required/></center>
      <br>
      <center><input type="submit" value="Registrar"/></center>
      <br>
      <a href='index.php' style="color:#FBFBF7;">Regresar</a>
   </div></center>
		</form></div>
		
</body>
</html>