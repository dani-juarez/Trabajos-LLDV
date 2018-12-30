<?php
include("");
$d1=$_POST['n1','n2','n3','n4',];

$query="INSERT INTO usuarios(tarjeta)VALUES('$d1')";
$resultado=$conexion ->query($query);
if($resultado){
	
	include("paquetes.php");
}
else{
	echo"no registrado";
}
?>