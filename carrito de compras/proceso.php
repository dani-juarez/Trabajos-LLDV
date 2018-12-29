<?php  
session_start();
$usuar=$_POST['usuari'];
$contr=$_POST['pass'];

include("conexion.php"); 

$proceso = $conexion->query("SELECT * FROM registro WHERE usu='$usuar' AND con='$contr' ");
if ($resultado = mysqli_fetch_array($proceso)) {
	$_SESSION['u_usuario'] = $usuar;
	header("Location: bienvenido.php");
}
else{
	header("Location: index.php");
}
?>