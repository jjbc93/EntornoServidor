<?php
include "../../../privada/Curriculum/config.php";
require_once PRIVADA . "ExperienciaModel.php";
require_once PRIVADA . "Session.php";
comprobarAcceso();
Session::initSession();

$peticion = $_REQUEST["peticion"];
$id = $_REQUEST["id"];
$nick = $_REQUEST["identUsuario"];
$nickUsuario = $_SESSION["usuario"]["nick"];

switch($peticion){
	case "insertar":
		$mensaje=ExperienciaModel::insertarExperiencia($_REQUEST);
		$_SESSION["mensajeE"]=$mensaje;
		break;
	case "eliminar":
		$mensaje=ExperienciaModel::eliminarExperiencia($id,$nick);
		$_SESSION["mensajeE"]=$mensaje;
		break;
	case "modificar":
		foreach ($_REQUEST as $campo){
			if(empty($campo)){
				$_SESSION["errorE"]="Debes introducir todos los datos";
			}
		}
		if($nickUsuario!=$nick){
			$_SESSION["errorE"]="No puede modificar el campo del usuario";
		}
		$mensaje=ExperienciaModel::modificarExperiencia($_REQUEST,$id,$nick);
		$_SESSION["mensajeE"]=$mensaje;
		break;
}
header("Location: UsuarioLogueado.php");
exit();