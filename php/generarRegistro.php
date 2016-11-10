<?php
include('../class/classPedidos.php');
$clase = new sistema;
$clase->conexion();

$codigo = $_POST['codigo'];
$fecha = date('Y-m-d');

$comprobar = mysql_num_rows(mysql_query("SELECT * FROM asistencias WHERE cod_pedido = '$codigo'"));

if($comprobar == 0){
	
	mysql_query("INSERT INTO asistencias (cod_pedido, fecha_pedido)VALUES('$codigo','$fecha') ");
	$_SESSION['cod_pedido'] = $codigo;

}else{
	
 	echo 'existe';
 
}
?>