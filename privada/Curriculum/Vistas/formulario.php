<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Formulario</title>
	</head>
	<body>
		<h2>Formulario de Registro</h2>
		<form name="formulario" method="post" action="Registrar.php">
			<p>Nick <input type="text" name="nick" value="<?=isset($_REQUEST["nick"]) ? $_REQUEST["nick"] : 
						   ""?>"/></p>
			<p>Nombre<input type="text" name="nombre" value="<?=isset($_REQUEST["nombre"]) ? $_REQUEST["nombre"] :
						   ""?>"/></p>
			<p>clave <input type="password" name="clave" value="<?=isset($_REQUEST["clave"]) ? $_REQUEST["clave"] : ""?>"/></p>
			<p>Repetir clave <input type="password" name="claveRepetida" value="<?=isset($_REQUEST["claveRepetida"]) ? $_REQUEST["claveRepetida"] : ""?>"/></p>
			<p>apellidos <input type="text" name="apellidos" value="<?=isset($_REQUEST["apellidos"]) ? 
							   $_REQUEST["apellidos"] : ""?>"/></p>
			<p>Fecha nacimiento <input type="date" name="fechaNacimiento" 
									   value="<?=isset($_REQUEST["fechaNacimiento"]) ? $_REQUEST["fechaNacimiento"] : ""?>"/></p>
			<p>Teléfono <input type="tel" name="telefono" value="<?=isset($_REQUEST["telefono"]) ? $_REQUEST["telefono"] : ""?>"/></p>
			<p>Dirección <input type="text" name="direccion" value="<?=isset($_REQUEST["direccion"]) ? $_REQUEST["direccion"] :""?>"/></p>
			<input type="submit"/>
		</form>
		<?php
							   if(isset($_SESSION["error"])){?>
		<p><?=$_SESSION["error"]?></p>
		<?php $_SESSION["error"]=null;?>
		<?php } ?>
	</body>
</html>