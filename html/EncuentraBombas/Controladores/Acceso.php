<?php
include "../../../privada/EncuentraBombas/Config/config.php";
require_once PRIVADA . "Session.php";
require_once PRIVADA . "../Bd/LoginModel.php";

if(!$_REQUEST){
	include PRIVADA . "../Vistas/login.php";
}else{
	Session::initSession();
	$nick = $_REQUEST["usuario"];
	$clave = $_REQUEST["clave"];
	if(empty($nick) || empty($clave)){
		$_SESSION["error"]="Debe introducir todos los datos";
	}else if(!LoginModel::comprobarLogin($nick,$clave)){
		$_SESSION["error"]="Usuario o clave incorrectos";
	}else{
		$usuario = LoginModel::obtenerUsuario($nick);
		$_SESSION["usuario"]=$usuario;
	}
	if(isset($_SESSION["error"])){
		include PRIVADA . "../Vistas/login.php";
	}else{
		header("Location: Autentificado.php");
	}
}