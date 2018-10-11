<?php
include("conexion.php");
$identificacion=$_POST['id'];
$nombre=$_POST['nombre'];
$imagen=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$query="INSERT INTO usuarios(identificacion,nombre,foto) VALUES('$identificacion','$nombre','$imagen')";
$resultado=$conexion ->query($query);
if($resultado){
	
	include('registro.php');
	}
else{
	echo "NO SE INGRESARON LOS DATOS";
}
?>