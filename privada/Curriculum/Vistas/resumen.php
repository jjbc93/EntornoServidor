<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resumen</title>
	<link type="text/css" rel="stylesheet" href="../css/resumen.css"/>
</head>
<body>
	<header>
			<h1>Resumen <?=$_SESSION["usuario"]["nick"]?></h1>
			<h1><a href="UsuarioLogueado.php?" class="enlaces">Datos</a></h1>
			<h1><a href="CerrarSesion.php" class="enlaces">Cerrar Sesión</a></h1>
	</header>
	<section>
	<article>
		<h2>Datos Personales</h2>
		<div class="caja">
		<h3>Nombre: <?=$usuario["nombre"]?></h3>
		<h3>Apellidos: <?=$usuario["apellidos"]?></h3>
		<h3>Clave: <?=$usuario["clave"]?></h3>
		<h3>Fecha Nacimiento: <?=$usuario["fechaNacimiento"]?></h3>
		<h3>Teléfono: <?=$usuario["telefono"]?></h3>
		<h3>Dirección: <?=$usuario["direccion"]?></h3>
		</div>
		</article>
		<?php foreach ($listaExperiencias as $experiencia){?>
		<article>
			<h2>Datos Experiencia</h2>
			<div class="caja">
				<h3>Empresa: <?=$experiencia["empresa"]?></h3>
				<h3>Cif: <?=$experiencia["cif"]?></h3>
				<h3>Fecha nicio: <?=$experiencia["fechaInicio"]?></h3>
				<h3>Fecha fin: <?=$experiencia["fechaFin"]?></h3>
				<h3>Cargo: <?=$experiencia["cargo"]?></h3>
				<h3>Funciones: <?=$experiencia["funciones"]?></h3>
				<h3>Empresa: <?=$experiencia["empresa"]?></h3>
			</div>
		</article>
		<?php }?>
		<?php foreach ($listaFormacion as $formacion){?>
		<article>
			<h2>Datos Formacion</h2>
			<div class="caja">
				<h3>Centro: <?=$formacion["centro"]?></h3>
				<h3>Fecha inicio: <?=$formacion["fechaInicio"]?></h3>
				<h3>Fecha fin: <?=$formacion["fechaFin"]?></h3>
				<h3>Título: <?=$formacion["titulo"]?></h3>
				<h3>Clasificación: <?=$formacion["clasificacion"]?></h3>
			</div>
		</article>
		<?php }?>
	</section>
</body>
</html>