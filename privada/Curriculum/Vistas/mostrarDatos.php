<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MostrarDatos</title>
</head>
<body>
	<table border="1">
	<caption>Datos del Usuario</caption>
		<thead>
			<tr>
				<th>Nick</th>
				<th>Usuario</th>
				<th>Clave</th>
				<th>Apellidos</th>
				<th>Fecha Nacimiento</th>
				<th>Teléfono</th>
				<th>Dirección</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>
		
			<tr>
				<td><input type="text" name="nick" value="<?=$usuario["nick"]?>"/></td>
				<td><input type="text" name="nombre" value="<?=$usuario["nombre"]?>"/></td>
				<td><input type="text" name="clave" value="<?=$usuario["clave"]?>"/></td>
				<td><input type="text" name="apellidos" value="<?=$usuario["apellidos"]?>"/></td>
				<td><input type="date" name="fechaNacimiento" value="<?=$usuario["fechaNacimiento"]?>"/></td>
				<td><input type="tel" name="telefono" value="<?=$usuario["telefono"]?>"/></td>
				<td><input type="text" name="direccion" value="<?=$usuario["direccion"]?>"/></td>
				<td><input type="submit" value="Editar"/></td>
			</tr>
		</tbody>
	</table>
	
	<?php
		if(isset($_SESSION["error"])){?>
			<p><?=$_SESSION["error"]?></p>
			<?php $_SESSION["error"]=null;?>
	<?php } ?>
	
	<table border="1">
	<caption>Datos de la experiencia</caption>
		<thead>
			<tr>
				<th>id</th>
				<th>Empresa</th>
				<th>Cif</th>
				<th>FechaInicio</th>
				<th>FechaFin</th>
				<th>Cargo</th>
				<th>Funciones</th>
				<th>IdentUsuario</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			
				<?php foreach ($listaExperiencias as $experiencia){?>
					
			<tr>
				<form method="post" action="Experiencia.php?peticion=modificar">
					<td><input type="number" name="id" value="<?=$experiencia["id"]?>"/></td>
					<td><input type="text" name="empresa" value="<?=$experiencia["empresa"]?>"/></td>
					<td><input type="text" name="cif" value="<?=$experiencia["cif"]?>"/></td>
					<td><input type="date" name="fechaInicio" value="<?=$experiencia["fechaInicio"]?>"/></td>
					<td><input type="date" name="fechaFin" value="<?=$experiencia["fechaFin"]?>"/></td>
					<td><input type="text" name="cargo" value="<?=$experiencia["cargo"]?>"/></td>
					<td><input type="text" name="funciones" value="<?=$experiencia["funciones"]?>"/></td>
					<td><input type="text" name="identUsuario" value="<?=$experiencia["identUsuario"]?>"/></td>
					<td><input type="submit" value="Editar"/></td>
					<td><a href="Experiencia.php?peticion=eliminar&id=<?=$experiencia["id"]?>
				    &identUsuario=<?=$experiencia["identUsuario"]?>"><button>Eliminar</button></a></td>
				</form>
			</tr>
			<?php }?>
		</tbody>
	</table>
	
	<?php
		if(isset($_SESSION["error"])){?>
			<p><?=$_SESSION["error"]?></p>
			<?php $_SESSION["error"]=null;?>
	<?php } ?>
	
	<table border="1">
	<caption>Datos de la formación</caption>
		<thead>
			<tr>
				<th>Id</th>
				<th>Centro</th>
				<th>FechaInicio</th>
				<th>FechaFin</th>
				<th>Título</th>
				<th>Clasificación</th>
				<th>identUsuario</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($listaFormacion as $formacion){?>
			<tr>
				<form name="formulario" method="post" action="Formacion.php?peticion=modificar">
					<td> <input type="number" name="id" value="<?=$formacion["id"]?>"/></td>
					<td> <input type="text" name="centro" value="<?=$formacion["centro"]?>"/></td>
					<td> <input type="date" name="fechaInicio"value="<?=$formacion["fechaInicio"]?>"/></td>
					<td> <input type="date" name="fechaFin" value="<?=$formacion["fechaFin"]?>"/></td>
					<td> <input type="text" name="titulo" value="<?=$formacion["titulo"]?>"/></td>
					<td> <input type="number" name="clasificacion" value="<?=$formacion["clasificacion"]?>"/></td>
					<td> <input type="text" name="identUsuario" value="<?=$formacion["identUsuario"]?>"/></td>
					<td> <input type="submit" value="Editar"/></td>
					<td> <a href="Formacion.php?peticion=eliminar&id=<?=$formacion["id"]?>
					&identUsuario=<?=$formacion["identUsuario"]?>"><button>Eliminar</button></a></td>
				</form>
			</tr>
			<?php }?>
		</tbody>
	</table>
	<?php
		if(isset($_SESSION["error"])){?>
			<p><?=$_SESSION["error"]?></p>
			<?php $_SESSION["error"]=null;?>
	<?php } ?>
	<a href="CerrarSesion.php"><button>Cerrar Sesión</button></a>
</body>
</html>