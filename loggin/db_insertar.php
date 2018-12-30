<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contraseña=$_POST['contrasena'];
$query="INSERT INTO usuarios(nombre,email,contrasena)VALUES('$nombre','$email','$contrasena')";
$resultado=$conexion ->query($query);
if($resultado){
	
	include("paquetes.php");
}
else{
	echo"no registrado";
}
?>