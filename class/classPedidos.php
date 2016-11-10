<?php
session_start();
class sistema{
		public function conexion(){
			$host = 'localhost';
			$usuario    = 'root';
			$password = '';
			$dataBase  = 'pibacho_bd';
			
			$conexion = mysql_connect($host, $usuario, $password);
			$seleccion = mysql_select_db($dataBase, $conexion);
		
		}
		function mostrarAsistencias(){
			$sql = mysql_query("SELECT * FROM asistencias");
			$item = 0;
			if(mysql_num_rows($sql)>0){
				while($mostrar = mysql_fetch_array($sql)){
					$estudiantes = mysql_num_rows(mysql_query("SELECT * FROM asistencias WHERE cod_pedido = '".$mostrar['cod_pedido']."' "));
					$item = $item+1;
					echo '<tr>
								<td>'.$item.'</td>
								<td>'.$mostrar['cod_pedido'].'</td>
								<td>'.$mostrar['fecha_pedido'].'</td>
								<td>'.$estudiantes.'</td>
								<td><input type="button" value="Detalle" class="btn btn-success" onClick="verDetalle(/'.$mostrar['cod_pedido'].'/)"></td>
							</tr>';
				}
			}else{
				echo '<tr><td colspan="5">No se encontraron registros...</td></tr>';
			}
		}
}