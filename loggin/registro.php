<?php 
$conexion=@mysqli_connect("localhost","root","","registro");
$regi="SELECT * FROM usuarios";
$usua=$conexion->query($regi); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<center><title>REGISTROS EN LA BASE DE DATOS</title></center>
</head>
<body>
	<h1>VERIFICADOR DE REGISTRO</h1>
	<body bgcolor= #3498DB>
	<header>
		<section>
			<table class="table" bgcolor= #F7F9F9>
				<tr>
					<th><center>IDENTIFICACION</center></th>
					<th><center>NOMBRE</center></th>
					<th><center>FOTO</center></th>
				</tr>
				<?php
				while ($registrousuario= $usua->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
					      <td>'.$registrousuario['identificacion'].'</td>
					       <td>'.$registrousuario['nombre'].'</td>
					        <td>'.$registrousuario['foto'].'</td>
					        </tr>';

				}
				?>
				
			</table>
		</section>
		
	

