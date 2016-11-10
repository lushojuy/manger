<?php
$conexion=mysql_connect("localhost","root","") or die("Hubo Problemas en la Conección"); //me conecto a la bd sino error
mysql_select_db("pibacho_bd",$conexion) or die("Problemas en la seleccion de la base de datos pibacho_bd"); //selecciono la bd(btarea)
mysql_query("insert into clientes(cli_nombre,cli_apellido,cli_mail,cli_telefono,cli_observacion) values
('$_POST[nombre]','$_POST[apellido]','$_POST[mail]',$_POST[telefono],'$_POST[observacion]')", $conexion) or die("Problemas al cargar".mysql_error()); //dni sin comillas por ser numérico
//se cargan los datos caso contrario mysql muestra un msj de error
mysql_close($conexion); // cerramos la coneccion a la bd

//echo "Fue dado de alta:".$_POST['nombre']; // mostramos un msj en php
//el codigo osea la clave primaria se crea en forma automática porque lo pusimos autoincremental

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muestra los datos cargados</title>
</head>
<body>
	<form>
		<fieldset>
		<legend>Datos Ingresados</legend>
			Nombre:<input type="text" size="40" value="<?php echo $_POST['nombre']; ?>"><br />
     		Apellido:<input type="text" size="35" value="<?php echo $_POST['apellido']; ?>"><br />
			tel&eacute;fono:<input type="text" size="30" value="<?php echo $_POST['telefono']; ?>"><br />

		</fieldset>
		
	</form>
	<br />
	<?php echo "<script javascrip> alert('Fue dado de alta la persona') </script>"; ?>
	<a href="registrarPedido.php">Realizar Pedido</a>
</body>
</html>