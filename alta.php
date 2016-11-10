<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>validacion</title>
<?php 
$conexion=mysql_connect("localhost","root","") or die("Hubo Problemas en la Conección"); //me conecto a la bd sino error
mysql_select_db("pibacho_db",$conexion) or die("Problemas en la seleccion de la base de datos Estoy en alta.php"); //selecciono la bd(btarea)

//pagina internet begin

$nombre = $_POST["nombre"];
$tel = $_POST["telefono"];
$nuevo_nombre=mysql_query("SELECT * from clientes where cli_nombre='$nombre'"); 

if(mysql_num_rows($nuevo_nombre)>0) 
{
	echo "<SCRIPT javasript'> 
    alert('ups!, ya lo registraste');
    document.location=('registrarPedido.php');
</SCRIPT>";
} 
// ------------ Si no esta registrado el usuario continua el script 
else 
{ 
// ============================================== 
// Comprobamos si el email esta registrado 

$nuevo_tel=mysql_query("SELECT * from clientes where cli_telefono='$tel'"); 
if(mysql_num_rows($nuevo_tel)>0) 
{ 
echo " 
<p class='avisos'>El numero de telefono ya esta registrada</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
} 
// ------------ Si no esta registrado el e-mail continua el script 
else 
{ 
  mysql_query("INSERT into clientes(cli_nombre,cli_telefono) values
('$_POST[nombre]',$_POST[tel])", $conexion) or die("Problemas al cargar".mysql_error());

mysql_close($conexion); // cerramos la coneccion a la bd

// Confirmamos que el registro ha sido insertado con exito 

}  
// ============================================== 
}  

//pagina internet end


//echo "Fue dado de alta:".$_POST['nombre']; // mostramos un msj en php
//el codigo osea la clave primaria se crea en forma automática porque lo pusimos autoincremental

?>
</head>
<body>
	<form>
            <fieldset>
            <legend>Datos Ingresados</legend>
              Nombre:<input type="text" size="40" value="<?php echo $_POST['nombre']; ?>"><br />
              Tel&eacute;fono:<input type="text" size="35" value="<?php echo $_POST['telefono']; ?>"><br />              
            </fieldset>
          </form>
          <a href="registrarPedido.php">Click aqui para regresar pedidos</a>
</body>
</html>

