<?php 
require('conexion.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/registrarPedido.css" rel="stylesheet" type="text/css">
	<script src="js/contador.js" type="text/javascript"></script>
	<script src="js/validar.js" language="JavaScript"> </script>
	<title>Registro de pedidos</title>
</head>
<body>
	<div id="mallaFondo">
		<div id="panelIzq">
			<a href="menuPrincipal.php">Volver al Men&uacute; Principal</a>
			<br>
			<a href="logout.php">Cerrar Sesi&oacute;n</a>
		</div>
		<div id="mallaFroSup">
			
			<div id="supIzq">
				<form name="formu" method="post" action="bdalta.php" enctype="multipart/form-data" onSubmit="return validar();">
					<fieldset><!-- Este comando es para encerrar en un cuadrito -->
						<legend>Mis Datos Personales</legend><!-- comando para mostrar una especie de título -->
						Nombre:
						<input type="text" name="nombre" size="40"><br>
						Apellido:
						<input type="text" name="apellido" size="30"><br>
						E-Mail:
						<input type="text" name="mail" /><br />
						Telefono:
						<input type="text" name="telefono" size="15"><br>
						Observaciones:
						<textarea name="observacion" rows="4" cols="80">
						</textarea><br /> 
						<input type="submit" value="enviar">
						<input type="reset" value="limpiar">
					</fieldset> 
				</form>
			</div>
		</div>
	</div>	
</body>
</html>