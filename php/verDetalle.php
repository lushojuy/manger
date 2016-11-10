<?php
include('../class/classPedidos.php');
$clase = new sistema;
$clase->conexion();

$cod = $_POST['codigo'];
$codigo = substr($cod,1,-1);

//$resultado = mysql_query("SELECT * FROM detalle_asistencias WHERE cod_pedido = '$codigo' ");
$resultado = mysql_query("SELECT a.id_alimento, a.ali_precio, a.ali_nombre, da.estudiante, da.cod_pedido from detalle_asistencias da, alimento a where da.estudiante=a.id_alimento and da.cod_pedido= '$codigo'");
echo '<lu>';
while($mostrar = mysql_fetch_array($resultado)){
	echo '<li>'.$mostrar['ali_nombre'].'</li>';
	echo "Pecio: ";
	echo $mostrar['ali_precio'];
}
echo '</ul>';
?>