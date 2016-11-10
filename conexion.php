<?php
	
	$mysqli=new mysqli("localhost","root","","pibacho_bd"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : %s\n', mysqli_connect_error();
		exit();
	}
	
?>