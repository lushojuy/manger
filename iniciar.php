<?php 
	session_start();
	require 'conexion.php';
	
	if(!isset($_POST["tipo"])){
		header("Location: registrarPedi2.php");
	}

	$tipoPedido = $_POST["tipo"];
	
	if ($tipoPedido == "telefonico") {
		header("Location: registroTelefonico.php");
	}
	if ($tipoPedido == "enLugar") {
		header("Location: seleccionMesa.php");
	}
 ?>