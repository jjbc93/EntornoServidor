<?php
define ("PRIVADA","../../../privada/Curriculum/");
include PRIVADA . "Session.php";

function comprobarAcceso(){
	Session::initSession();
	if(!isset($_SESSION["usuario"])){
		header("Location: Acceso.php");
	}
}
/* En mi index, include PRIVADA."login.php o validaciones.php"*/