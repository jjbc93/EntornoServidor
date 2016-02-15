<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Formulario</title>
		<link type="text/css" rel="stylesheet" href="../css/principal.css"/>
	</head>
	<body>
		<header>
			<h1>Registro Usuario</h1>
		</header>
		<section>
		
		<form name="formulario" method="post" action="Registrar.php">
		<h2>Formulario de Registro</h2>
			<input type="text" name="nick" value="<?=isset($_REQUEST["nick"]) ? $_REQUEST["nick"] : ""?>" placeholder="Nick"/>
			<input type="text" name="nombre" value="<?=isset($_REQUEST["nombre"]) ? $_REQUEST["nombre"] : ""?>" placeholder="Nombre"/>
			<input type="password" name="clave" value="<?=isset($_REQUEST["clave"]) ? $_REQUEST["clave"] : ""?>" placeholder="Clave"/>
			<input type="password" name="claveRepetida" value="<?=isset($_REQUEST["claveRepetida"]) ? $_REQUEST["claveRepetida"] : ""?>" placeholder="Repetir clave"/>
			<input type="text" name="apellidos" value="<?=isset($_REQUEST["apellidos"]) ? 
			$_REQUEST["apellidos"] : ""?>" placeholder="Apellidos"/>
			<input type="date" name="fechaNacimiento" value="<?=isset($_REQUEST["fechaNacimiento"]) ? $_REQUEST["fechaNacimiento"] : ""?>" placeholder="Fecha nacimiento"/>
			<input type="tel" name="telefono" value="<?=isset($_REQUEST["telefono"]) ? $_REQUEST["telefono"] : ""?>" placeholder="Teléfono"/>
			<input type="text" name="direccion" value="<?=isset($_REQUEST["direccion"]) ? $_REQUEST["direccion"] :""?>" placeholder="Dirección"/>
			<?php
		if(isset($_SESSION["error"])){?>
		<p class="error"><?=$_SESSION["error"]?></p>
		<?php $_SESSION["error"]=null;?>
		<?php } ?>
			<input type="submit" class="button" value="Enviar Formulario"/>
		</form>
		</section>
		
	</body>
</html>