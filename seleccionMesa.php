 <?php

require_once ('conexion.php');

session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Seleccion Mesa</title>
	<link href="css/seleccionMesa.css" rel="stylesheet" type="text/css">
</head>
<body>

<script type="text/javascript">

function changeColor(x)
{
    if(x.style.background=="rgb(57, 181, 98)")
    {
        x.style.background="#FF4000";
    }else{
        x.style.background="#39b562";
    }
    return false;
}
</script>
		<h1 >Seleccione mesa disponible para realizar un pedido</h1>
	<?php
	$query = "SELECT * FROM mesa";
              $res=$mysqli->query($query);
              while ($row=$res->fetch_array(MYSQLI_BOTH)) 
                {
              ?>
	<div class="nromesa" href="#" id="mb" class="boton" onclick = "changeColor(this);">
		<?php echo "<img src='images/mesa.jpg' width='150px'>";?>
		<h3>MESA <?php echo $row[0] ?></h3>
	</div>
		<?php } ?>
	<a href="registrarPedido.php">
		<button>volver a registro de pedidos</button>
	</a>
</body>
</html>