<?php

require_once "../logica/Bd.php";

$datos["nick"]="helena";
$datos["clave"]="alu";
$nick="helena";
$clave="alu";

/*Bd::insertar($datos);*/
/*Bd::eliminar($datos);*/
/*Bd::modificar($datos);*/

if(Bd::comprobar($nick,$clave)){
	echo "Estoy dentro";
}else{
	echo "Incorrecto";
}

$lista=Bd::obtener($nick);

echo $lista["clave"];
echo $lista["nick"];
?>


