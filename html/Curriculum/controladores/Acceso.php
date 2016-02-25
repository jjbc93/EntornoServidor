<?php
include "../../../privada/Curriculum/config.php";
include PRIVADA . "LoginModel.php";
require_once PRIVADA . "UsuarioModel.php";
require_once PRIVADA . "Session.php";

if(!$_REQUEST){
	include PRIVADA . "Vistas/login.php";
}else{
	Session::initSession();
	$nick = $_REQUEST["usuario"];
	$clave = $_REQUEST["clave"];
	if(empty($nick) || empty($clave)){
		$_SESSION["error"]="Debes introducir todos los datos";
	}else if (!LoginModel::comprobarLogin($nick,$clave)){
		$_SESSION["error"]="Usuario o clave incorrectas";
	}else{
		$usuario = UsuarioModel::obtenerUsuario($nick);
		$_SESSION["usuario"]=$usuario;
	}
	if(isset($_SESSION["error"])){
		include PRIVADA . "Vistas/login.php";
	}else{
		header("Location: UsuarioLogueado.php");
	}
}



