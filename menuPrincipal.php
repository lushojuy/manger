<?php	
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT u.id, p.nombre FROM usuarios AS u INNER JOIN personal AS p ON u.id_personal=p.id WHERE u.id = '$idUsuario'";
	$result=$mysqli->query($sql);
	
	$row = $result->fetch_assoc();
?> 
<html>
	<head>
		<link href="css/menuPrincipal.css" rel="stylesheet" type="text/css">
		<title>Men&uacute; principal</title>
	</head>
	
	<body>
	<div id="encabezado">
		<h1><?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?></h1>		
	</div>
	<?php if($_SESSION['tipo_usuario']==1) { ?>
	<div id="panelIzq">
		<a href="registro.php">Nuevo usuario</a>
		<br />
		<?php } ?>
		
		<a href="logout.php">Cerrar Sesi&oacute;n</a>		
	</div>
	<div id="panelDer">
		<input type="button" value="Registrar Pedido" onclick="window.location= 'http://localhost/pibacho/registrarPedi2.php'">
		<input type="button" value="Modificar Pedido" onclick="window.location= 'http://localhost/pibacho/modificarPedido.php'">
		<input type="button" value="Cancelar Pedido" onclick="window.location= 'http://localhost/pibacho/cancelarPedido.php'">
		<input type="button" value="Entregar Pedido" onclick="window.location= 'http://localhost/pibacho/entregarPedido.php'">
	</div>	
	</body>
</html>