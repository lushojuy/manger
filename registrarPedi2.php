<?php 
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registro pedi2</title>
</head>
<body>
	<form action="iniciar.php" method="POST">
		<h3>Seleccione el tipo de pedido que desea realizar</h3>
		<input type="radio" name="tipo" value="telefonico" id="telonico">Telef&oacute;nico
		<input type="radio" name="tipo" value="enLugar" id="insitu">En el lugar
		<input type="submit" value="Iniciar pedido">
	</form>
	<div id="midiv">
    Para continuar debes seleccionar una opcion y a continuacion hacer clic en "iniciar pedido"
    </div>
</body>
</html>