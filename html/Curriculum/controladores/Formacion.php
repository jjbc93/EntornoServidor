<?php
include "../../../privada/Curriculum/config.php";
require_once PRIVADA . "FormacionModel.php";
require_once PRIVADA . "Session.php";
Session::initSession();
$peticion = $_REQUEST["peticion"];
$id = $_REQUEST["id"];
$nick = $_REQUEST["identUsuario"];
$nickUsuario = $_SESSION["usuario"]["nick"];
switch($peticion){
	case "insertar":
		break;
	case "eliminar":
		FormacionModel::eliminarFormacion($id,$nick);
		break;
	case "modificar":
		foreach ($_REQUEST as $campo){
			if(empty($campo)){
				$_SESSION["error"]="Debes introducir todos los datos";
			}
		}
		if($nickUsuario!=$nick){
			$_SESSION["error"]="No puede modificar el campo del usuario";
		}
		FormacionModel::modificarFormacion($_REQUEST,$id,$nick);
		break;
}
header("Location: UsuarioLogueado.php");
exit();