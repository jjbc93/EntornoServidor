<?php
include "../../../privada/Curriculum/config.php";
include PRIVADA . "loginModel.php";
include PRIVADA . "ExperienciaModel.php";
include PRIVADA . "Session.php";

	/*echo "El valor es: ".loginModel::comprobarLogin("juanjo","alumno");
	echo "El valor es: ".loginModel::comprobarUsuario("juanjo");*/

	/*if(loginModel::comprobarLogin("juanjo","alumno")){
		echo "Usuario y clave encontrados";
	}else{
		echo "No existe usuario y clave";
	}*/
	
$mbd = new PDO('mysql:host=localhost;dbname=prueba', "root", "", array(
    PDO::ATTR_PERSISTENT => true
));	

$mbdd = new PDO('mysql:host=localhost;dbname=prueba', "root", "", array(
    PDO::ATTR_PERSISTENT => true
));

	$_REQUEST["empresa"]="Ticomsa";
	$_REQUEST["cif"]="445511";
	$_REQUEST["puesto"]="Antenista";
	$_REQUEST["funciones"]="Encargado de las instalaciones";
	$_REQUEST["fecha_inicio"]="1993-05-30";
 	$_REQUEST["fecha_fin"]="1992-11-14";
	$_REQUEST["ident_usuario"]="luis";
	$mensaje=ExperienciaModel::insertarExperiencia($_REQUEST);
	echo $mensaje;
	
	
