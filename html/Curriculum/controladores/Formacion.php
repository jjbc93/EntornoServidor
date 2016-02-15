<?php
include "../../../privada/Curriculum/config.php";
require_once PRIVADA . "FormacionModel.php";
require_once PRIVADA . "Session.php";
comprobarAcceso();
Session::initSession();

$peticion = $_REQUEST["peticion"];
$id = $_REQUEST["id"];
$nick = $_REQUEST["identUsuario"];
$nickUsuario = $_SESSION["usuario"]["nick"];

switch($peticion){
	case "insertar":
		$mensaje=FormacionModel::insertarFormacion($_REQUEST);
		$_SESSION["mensajeF"]=$mensaje;
		break;
	case "eliminar":
		$mensaje=FormacionModel::eliminarFormacion($id,$nick);
		$_SESSION["mensajeF"]=$mensaje;
		break;
	case "modificar":
		foreach ($_REQUEST as $campo){
			if(empty($campo)){
				$_SESSION["errorF"]="Debes introducir todos los datos";
			}
		}
		if($nickUsuario!=$nick){
			$_SESSION["errorF"]="No puede modificar el campo del usuario";
		}
		$mensaje=FormacionModel::modificarFormacion($_REQUEST,$id,$nick);
		$_SESSION["mensajeF"]=$mensaje;
		break;
}
header("Location: UsuarioLogueado.php");
exit();