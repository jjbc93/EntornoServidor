<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link type="text/css" rel="stylesheet" href="../css/principal.css"/>
	</head>
	<body>
		<header>
			<h1>Acceso Usuario</h1>
		</header>
		<section>
			<form method="post" action="Acceso.php">
				<h2>Login</h2>
				<input type="text" name="usuario" placeholder="Usuario"/><br/>
				<input type="password" name="clave" placeholder="Clave"/><br/>
				<input type="submit" value="entrar" class="button"/>
			
			<?php
				if(isset($_SESSION["error"])){?>
					<p class="error"><?=$_SESSION["error"]?></p>
					<?php $_SESSION["error"]=null;?>
				<?php } ?> 
			<p><a href="Registrar.php">¿Desea Registrarse?</a></p>
			</form>
		</section>
	</body>
</html>