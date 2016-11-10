<?php
include('../class/classPedidos.php');
$clase = new sistema;
$clase->conexion();

$registro = $_SESSION['cod_pedido'];
$estudiante = $_POST['nombre'];

mysql_query("INSERT INTO detalle_asistencias (cod_pedido, estudiante)VALUES('$registro','$estudiante') ");


//DEVOLVER LOS NOMBRES DE LOS ESTUDIANTES REGISTRADOS
//$resultado = mysql_query("SELECT * FROM detalle_asistencias WHERE cod_pedido = '$registro' ");

//echo '<ul>';
//while($mostrar = mysql_fetch_array($resultado)){
//	echo '<li>'.$mostrar['estudiante'].'</li>';
//}
//echo '</ul>';
$resultado = mysql_query("SELECT a.id_alimento, a.ali_precio, a.ali_nombre, da.estudiante, da.cod_pedido from detalle_asistencias da, alimento a where da.estudiante=a.id_alimento and da.cod_pedido= '$registro'");
echo '<lu>';
while($mostrar = mysql_fetch_array($resultado)){
	echo '<li>'.$mostrar['ali_nombre'].'</li>';
	echo "Pecio: ";
	echo $mostrar['ali_precio'];
}
echo '</ul>';
?>