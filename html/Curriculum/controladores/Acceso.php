<?php
include "../../../privada/Curriculum/config.php";
include PRIVADA . "loginModel.php";
require_once PRIVADA . "UsuarioModel.php";

function procesarLogin(){
		$nick = $_REQUEST["usuario"];
		$clave = $_REQUEST["clave"];
		if(empty($nick) || empty($clave)){
			$_SESSION["error"]="Debes introducir todos los datos";
		}else if (!loginModel::comprobarLogin($nick,$clave)){
			$_SESSION["error"]="Usuario o clave incorrectas";
		}else{
			$usuario = usuarioModel::obtenerUsuario($nick);
			$_SESSION["usuario"]=$usuario;
			$experiencia = usuarioModel::obtenerExperiencia($nick);
			var_dump($experiencia);
			$_SESSION["experiencia"]=$experiencia;
		}

		
	}
if(!$_REQUEST){
	include PRIVADA . "Vistas/login.php";
}else{
	session_start();
	$peticion = $_REQUEST["peticion"];
	
	switch ($peticion){
		case "login":
			procesarLogin();
			if(isset($_SESSION["error"])){
				include PRIVADA . "Vistas/login.php";
			}else{
				header("Location: UsuarioLogueado.php");
			}
			break;
	}

	
}
/*header("Location: " . PRIVADA . "Vistas/" .$pagina);*/


