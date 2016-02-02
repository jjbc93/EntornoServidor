<?php
$usuario= $_SESSION["usuario"];
$listaExperiencias = $_SESSION["experiencia"];
var_dump($listaExperiencias);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MostrarDatos</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Usuario</th>
				<th>Clave</th>
			</tr>
		</thead>
		<tbody>
		
			<tr>
				<td><?=$usuario["nick"]?></td>
				<td><?=$usuario["clave"]?></td>
			</tr>
		</tbody>
	</table>
	
	<table border="1">
		<thead>
			<tr>
				<th>titulo</th>
				<th>centro</th>
				<th>usuario</th>
			</tr>
		</thead>
		<tbody>
			
				<?php foreach ($listaExperiencias as $experiencia){?>
					
			<tr>
				<td><?=$experiencia["titulo"]?></td>
				<td><?=$experiencia["centro"]?></td>
				<td><?=$experiencia["usuario"]?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	
	
	<table border="1">
		<thead>
			<tr>
				<th>titulo</th>
				<th>centro</th>
				<th>usuario</th>
			</tr>
		</thead>
		<tbody>
			
				<?php for ($i=0; $i<count($listaExperiencias); $i++){?>
					
			<tr>
				<td><?=$listaExperiencias[$i]["titulo"]?></td>
				<td><?=$listaExperiencias[$i]["centro"]?></td>
				<td><?=$listaExperiencias[$i]["usuario"]?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</body>
</html>