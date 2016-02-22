<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Juego</title>
	<link type="text/css" rel="stylesheet" href="../css/principal.css"/>
</head>
<body>
	<header>
			<h1>Acceso Usuario</h1>
		</header>
		<section>
			<form method="post" action="Autentificado.php">
				<h2>Selecciona una dificultad</h2>
				<input type="text" name="nick" placeholder="nick"/><br/>
				<p><input type="radio" name="dificultad" value="facil"/>Facil</p>
				<p><input type="radio" name="dificultad" value="medio"/>Medio</p>
				<p><input type="radio" name="dificultad" value="dificil"/>Dificl</p>
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