<h1><CENTER> ESTADO DEL PAGO</CENTER> </h1>
<center><img src="pago.png" width="150" height="150"/></center>
<h2><center>PAGO EXITOSO</h2></center>
<center>
<?php  
  session_start();
  if (isset($_SESSION['u_usuario'])){
    echo "<a href='cerrar_sesion.php'>cerrar sesion</a>";
  }
  else{
    header("Location: index.php");
  }

  ?></center>