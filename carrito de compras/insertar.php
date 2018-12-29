<?php  
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$sql="INSERT INTO registro (nom, ape, correo, usu, con) VALUES ('$nombre','$apellido','$correo','$usuario','$contrasena')";
echo($sql);
mysqli_query($conexion, $sql);

?>