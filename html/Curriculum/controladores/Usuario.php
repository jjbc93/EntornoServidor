<?php
include "../../../privada/Curriculum/config.php";
require_once PRIVADA . "UsuarioModel.php";
require_once PRIVADA . "Session.php";
Session::initSession();

$peticion = $_REQUEST["peticion"];
$nick = $_REQUEST["nick"];
$nickUsuario = $_SESSION["usuario"]["nick"];

switch($peticion){
		
	case "eliminar":
		$mensaje=UsuarioModel::eliminarUsuario($nick);
		$_SESSION["mensajeU"]=$mensaje;
		break;
	case "modificar":
		foreach ($_REQUEST as $campo){
			if(empty($campo)){
				$_SESSION["errorU"]="Debes introducir todos los datos";
			}
		}
		if($nickUsuario!=$nick){
			$_SESSION["errorU"]="No puede modificar el campo del usuario";
		}
		$mensaje=UsuarioModel::modificarUsuario($_REQUEST,$nick);
		$_SESSION["mensajeU"]=$mensaje;
		break;
}
header("Location: UsuarioLogueado.php");
exit();