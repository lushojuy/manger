<?php
	require('conexion.php');
	
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		header("Location: menuPrincipal.php");
	}
	
	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$error = '';
		
		$sha1_pass = sha1($password);
		
		$sql = "SELECT id, id_tipo FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id_usuario'] = $row['id'];
			$_SESSION['tipo_usuario'] = $row['id_tipo'];
			
			header("location: menuPrincipal.php");
			} else {
			$error = "El nombre o contrase&ntilde;a son incorrectos";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
    	<link href="css/index.css" rel="stylesheet" type="text/css">
	</head>
	<body background="images/background.jpg">
		<div id="loginIndexPadre">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
			<div class="loginIndexHijo"><input id="usuario" name="usuario" type="text" placeholder="Ingrese Usuario"></div>
			<br />
			<div class="loginIndexHijo"><input id="password" name="password" type="password" placeholder="Ingrese contrase&ntilde;a"></div>
			<br />
			<div class="loginIndexHijo"><input name="login" type="submit" value="Iniciar Sesi&oacute;n"></div> 
			<br>
			<div class="round-a-gray"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>

		</form> 
		</div>
		
		<br />
		
	</body>
</html>		