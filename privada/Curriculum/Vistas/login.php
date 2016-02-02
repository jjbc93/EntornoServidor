<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<h1>Acceso Usuario</h1>
	<form name="login" method="post" action="Acceso.php?peticion=login">
		<label>Introduce usuario</label>
		<input type="text" name="usuario"/><br/>
		<label>Introduce clave</label>
		<input type="text" name="clave"/><br/>
		<input type="submit" value="entrar"/>
	</form>
	<?php
		if(isset($_SESSION["error"])){?>
			<p><?=$_SESSION["error"]?></p>
			<?php $_SESSION["error"]=null;?>
	<?php } ?>
	
	<a href="Acceso.php?peticion=formularioRegistro">¿Desea Registrarse?</a>
</body>
</html>