<?php
include "../../../privada/Curriculum/config.php";
require_once PRIVADA . "LoginModel.php";
require_once PRIVADA . "UsuarioModel.php";
require_once PRIVADA . "Session.php";
if(!$_REQUEST){
	include PRIVADA . "Vistas/formulario.php";
}else{
	Session::initSession();
	foreach ($_REQUEST as $campo){
		if(empty($campo)){
			$_SESSION["error"]="Debes introducir todos los datos";
		}
	}
	if(LoginModel::comprobarUsuario($_REQUEST["nick"])){
		$_SESSION["error"]="El usuario ya existe cambie el nick";
	}else if($_REQUEST["clave"]!=$_REQUEST["claveRepetida"]){
		$_SESSION["error"]="Debe introducir la misma clave";
	}
	
	if(isset($_SESSION["error"])){
		include PRIVADA . "Vistas/formulario.php";
	}else{
		UsuarioModel::insertarUsuario($_REQUEST);
		header("Location: Acceso.php");
	}

}

/*$nick = $_REQUEST["nick"];
	$nombre = $_REQUEST["nombre"];
	$clave = $_REQUEST["clave"];
	$claveRepetida = $_REQUEST["claveRepetida"];
	$fechaNacimiento = $_REQUEST["fechaNacimiento"];
	$telefono = $_REQUEST["telefono"];*/