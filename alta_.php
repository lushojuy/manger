<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Formulario Index</title>
<link href="file:///E|/xampp/htdocs/codigosphp/style.css" rel="stylesheet" type="text/css" />
<script src="validar.js" language="JavaScript"> </script>
</head>
<body>
<form name="formu" method="post" action="bdalta.php" enctype="multipart/form-data" onSubmit="return validar();">
<fieldset><!-- Este comando es para encerrar en un cuadrito -->
 <legend>Mis Datos Personales</legend><!-- comando para mostrar una especie de título -->
Nombre:
 <input type="text" name="nombre" size="40"><br>
Apellido:
 <input type="text" name="apellido" size="30"><br>
DNI:
 <input type="text" name="dni" size="8"><br>
Fecha de Nacimiento: Día:
 <select name="dia">
   <?php
    for ($i=1; $i<=31; $i++) 
	{      
     echo "<option value='$i'>$i</option>";
    }
    ?>	        
 </select>
Mes: 
 <select name="mes">
   <?php
     for ($j=1; $j<=12; $j++)
	 {
      echo "<option value=$j>$j</option>";
     }
    ?>
 </select>
Año: 
 <select name="anio">
   <?php
     for($k=2012; $k>=1959; $k--)
	 {
	  echo "<option value=$k>$k</option>";
	 }
	
    ?>
</select><br />
Sexo:
 <input type="radio" name="sexo" value="hombre" checked="checked">hombre <!--uso de checkd para seleccion por defecto -->
 <input type="radio" name="sexo" value="mujer">mujer
 <br />
<legend>Mis Datos de Cuenta<legend><br />
E-Mail:
 <input type="text" name="mail" /><br />
Password:
 <input type="password" name="pass"><br>
Repetir Password:
 <input type="password" name="pass1"><br>
Foto:
 <input type="file" name="foto"><br>

<legend>Mis Gustos<legend><br />
 <input type="checkbox" name="gusto1" />Programación
 <input type="checkbox" name="gusto2" />Televisión
 <input type="checkbox" name="gusto3" />Deportes
 <br />
 <input type="checkbox" name="gusto4" />Vagancia
 <input type="checkbox" name="gusto5" />Leer
 <br>
Observaciones:
 <textarea name="observacion" rows="4" cols="80">
 </textarea><br /> 
 <input type="submit" value="enviar">
 <input type="reset" value="limpiar">
</fieldset> 
</form>
</body>
</html>

