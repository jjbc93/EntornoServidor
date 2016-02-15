<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>
	</head>
	<body>
		<div class="contenedor">
			<h1>Bienvenido al Ahorcado</h1>
			<form name="formulario" method="post" action="Acceso.php">
				<label>Introduce nombre</label>
				<input type="text" name="nombre"/><br/>
				<label>Dificultad</label>
				<select name="dificultad">
					<option value="1">facil</option>
					<option value="2">media</option>
					<option value="3">dificil</option>
				</select><br/>
				<input type="submit" value="Jugar"/>
			</form>

			<?php 
				if(isset($_SESSION["error"])){ ?>
				<p><?=$_SESSION["error"]?></p>
				<?php $_SESSION["error"]=null;?>
		    <?php } ?>
		</div>
	</body>
</html>