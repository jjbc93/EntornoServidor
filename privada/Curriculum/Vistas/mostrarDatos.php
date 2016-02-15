<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MostrarDatos</title>
	<link type="text/css" rel="stylesheet" href="../css/mostrarDatos.css"/>
</head>
<body>
		<header>
			<h1>Datos de <?=$_SESSION["usuario"]["nick"]?></h1>
		</header>
	<table border="1">
	<caption><p>Datos del Usuario</p></caption>
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
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
		
			<tr>
			    <form name="form" method="post" action="Usuario.php?peticion=modificar"> 
				<td><input type="text" name="nick" value="<?=$usuario["nick"]?>"/></td>
				<td><input type="text" name="nombre" value="<?=$usuario["nombre"]?>"/></td>
				<td><input type="text" name="clave" value="<?=$usuario["clave"]?>"/></td>
				<td><input type="text" name="apellidos" value="<?=$usuario["apellidos"]?>"/></td>
				<td><input type="date" name="fechaNacimiento" value="<?=$usuario["fechaNacimiento"]?>"/></td>
				<td><input type="tel" name="telefono" value="<?=$usuario["telefono"]?>"/></td>
				<td><input type="text" name="direccion" value="<?=$usuario["direccion"]?>"/></td>
				<td><input type="submit" value="Editar" class="button"/></td>
				<td><a onClick="return confirm('¿Estas seguro?');" href="Usuario.php?peticion=eliminar"><img src="../css/img/usuario.jpg" width="30px"></a></td>
				</form>
			</tr>
		</tbody>
	</table>
	
	<?php
		if(isset($_SESSION["errorU"])){?>
			<p><?=$_SESSION["errorU"]?></p>
			<?php $_SESSION["errorU"]=null;?>
	     <?php }else if (isset($_SESSION["mensajeU"])) {?>
	     <p><?=$_SESSION["mensajeU"]?></p>
	     <?php $_SESSION["mensajeU"]=null;?>
	     <?php } ?>
	
	<table border="1">
	<caption><p>Datos de la Experiencia</p></caption>
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
					<td><input type="submit" value="Editar" class="button"/></td>
					<td><a onClick="javascript: return confirm('¿Estas seguro?');" href="Experiencia.php?peticion=eliminar&id=<?=$experiencia["id"]?>
				    &identUsuario=<?=$experiencia["identUsuario"]?>"><img src="../css/img/archivo.jpg" width="30px"></a></td>
				</form>
			</tr>
			<?php }?>
			
			<tr>
				<form name="formulario" method="post" action="Experiencia.php?peticion=insertar">
					<td><input type="number" name="id" disabled/></td>
					<td><input type="text" name="empresa" placeholder="empresa"/></td>
					<td><input type="text" name="cif" placeholder="cif"/></td>
					<td><input type="date" name="fechaInicio"placeholder="fecha inicio"/></td>
					<td><input type="date" name="fechaFin" placeholder="fecha fin"/></td>
					<td><input type="text" name="cargo"placeholder="cargo"/></td>
					<td><input type="text" name="funciones" placeholder="funciones"/></td>
					<td><input type="text" name="identUsuario"placeholder="identUsuario"/></td>
					<td><input type="submit" value="" id="nuevo"></td>
				</form>
			</tr>
		</tbody>
	</table>
	
	<?php
		if(isset($_SESSION["errorE"])){?>
			<p><?=$_SESSION["errorE"]?></p>
			<?php $_SESSION["errorE"]=null;?>
	     <?php }else if (isset($_SESSION["mensajeE"])) {?>
	     <p><?=$_SESSION["mensajeE"]?></p>
	     <?php $_SESSION["mensajeE"]=null;?>
	     <?php } ?>
	
	<table border="1">
	<caption><p>Datos de la Formación</p></caption>
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
					<td> <input type="submit" value="Editar" class="button"/></td>
					<td><a onClick="javascript: return confirm('¿Estas seguro?');" class="b"href="Formacion.php?peticion=eliminar&id=<?=$formacion["id"]?>
					&identUsuario=<?=$formacion["identUsuario"]?>"><img src="../css/img/archivo.jpg" width="30px"></a></td>
				</form>
			</tr>
			<?php }?>
			
			<tr>
				<form name="formulario" method="post" action="Formacion.php?peticion=insertar">
					<td><input type="number" name="id" disabled/></td>
					<td><input type="text" name="centro" placeholder="centro"/></td>
					<td><input type="date" name="fechaInicio" placeholder="fecha Inicio"/></td>
					<td><input type="date" name="fechaFin" placeholder="fecha fin"/></td>
					<td><input type="text" name="titulo" placeholder="titulo"/></td>
					<td><input type="number" name="clasificacion" placeholder="clasificacion"/></td>
					<td><input type="text" name="identUsuario" placeholder="identUsuario"/></td>
					<td><input type="submit" value="" id="nuevo"></td>
				</form>
			</tr>
		</tbody>
	</table>
	
	<?php
		if(isset($_SESSION["errorF"])){?>
			<p><?=$_SESSION["errorF"]?></p>
			<?php $_SESSION["errorF"]=null;?>
	     <?php }else if (isset($_SESSION["mensajeF"])) {?>
	     <p><?=$_SESSION["mensajeF"]?></p>
	     <?php $_SESSION["mensajeF"]=null;?>
	     <?php } ?>
	<a href="CerrarSesion.php" class="enlaces">Cerrar Sesión</a>
	<a href="UsuarioLogueado.php?resumen" class="enlaces">Resumen</a>
</body>
</html>