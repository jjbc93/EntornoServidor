<?php
define ("PRIVADA","../../../privada/EncuentraBombas/Config/");
require_once "Session.php";
function comprobarAcceso(){
	Session::initSession();
	if(!isset($_SESSION["usuario"])){
		header("Location: Acceso.php");
	}
}