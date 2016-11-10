<?php
	include('class/classPedidos.php');
	$clase = new sistema;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de pedidos</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/myjava.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link href="css/registrarPedido.css" rel="stylesheet" type="text/css">
	<script src="js/contador.js" type="text/javascript"></script>
	<script src="js/validar.js" language="JavaScript"> </script>

</head>
<body>
	<div id="mallaFondo">
		<div id="panelIzq">
			<a href="menuPrincipal.php">Volver al Men&uacute; Principal</a>
			<br>
			<a href="logout.php">Cerrar Sesi&oacute;n</a>
		</div>
		
		<section>
		    <h2>Historial de Pedidos</h2>
		    <br />
		    <input type="button" value="GENERAR NUEVO REGISTRO" id="nuevaAsistencia" class="btn btn-primary"/>
		    <br />
		    <br />
		    <table class="table table-bordered table-condensed table-hover">
		        <thead>
		            <tr>
		                <th>ITEM</th>
		                <th>CODIGO DE PEDIDO</th>
		                <th>FECHA REGISTRADA</th>
		                <th>CANTIDAD</th>
		                <th>ACCION</th>
		            </tr>
		        </thead>
		        <tbody>
		            <?php $clase->conexion();
		                     $clase->mostrarAsistencias(); ?>
		        </tbody>
		    </table>
		</section>
<!-- MODAL DE REGISTRO -->

 <div class="modal fade" id="modalAsistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registro de Pedidos</b></h4>
            </div>
            <div class="modal-body">
            <fieldset><legend>1. Generar Registro</legend>
				<table class="tbl-registro" width="100%">
                	<tr>
                    	<td>Codigo: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="5"/></td>
                    	<td>Fecha: </td>
                        <td><input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td colspan="4"><input type="button" id="generarAsistencia" class="btn btn-success" value="Ingresar Alumnos" /></td>
                    </tr>
                </table>
                </fieldset>
                <div id="mensaje"></div>
                <fieldset><legend>2. Registrar Pedidos</legend>
                <table class="tbl-registro" width="100%">
                	<tr>
                    	<!--<td><input type="text" placeholder="Escriba el nombre del alimento..." class="form-control" id="nombEstudiante" disabled="disabled"/></td>-->
                    	<td><?php
                    	$sql=mysql_query("SELECT * FROM alimento");
                    	if(mysql_num_rows($sql)){
                    		$select= '<select name="select" id="alimento" class="form-control" disabled="disabled">';
                    		while($rs=mysql_fetch_array($sql)){
                    			$select.='<option value="'.$rs['id_alimento'].'">'.$rs['ali_nombre'].'</option>';
                    		}}
                    	$select.='</select>'; 
                    	echo $select;
                    	?>
                    </td>
                        <td><input type="button" id="regEstudiante" class="btn btn-primary" value="+" disabled="disabled"/></td>
                    </tr>
                </table>
                </fieldset>
                <br />
                <div id="contenidoRegistro"></div>
                <div class="modal-footer">
                	<input type="button" id="guardar" class="btn btn-default" value="Guardar"/>
                </div>
            </div>
          </div>
        </div>
      </div>
      
      
   <!-- MODAL PARA MOSTRAR EL DETALLE -->

 <div class="modal fade" id="modalDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registro de Pedidos</b></h4>
            </div>
            <div class="modal-body" id="datosAqui">
            </div>
          </div>
       </div>
   </div>   
	</div>	
</body>
</html>