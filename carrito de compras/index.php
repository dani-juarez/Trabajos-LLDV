<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesion</title>
	  <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body background="fondo2.jpg">
	<center><img src="pacman1.png" width="150" height="150"/></center>
   <center><h1>Inicio de Sesion.</h1></center>
   <center><div class="fon" ><form action="proceso.php" method="POST">
      <br>
      
      <center><label>Usuario: </label> <input type="text" name = "usuari" value="" required placeholder="Ingrese Usuario"/></center>
      <br>
      <center><label>Contrasena: </label> <input type="password" name = "pass" value="" required placeholder="Ingrese Contraseña" /></center>
      <br>
      <center><input type="submit" value="INGRESAR" /></center>
      <br>
      <a href='registro.php' style="color:#FBFBF7;">Crear cuenta nueva</a>
   </form></div></center>


</body>
</html>