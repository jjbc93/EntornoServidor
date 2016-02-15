<?php
define ("PRIVADA","../../../privada/Ahorcado/Config/");
function comprobarAcceso(){
	Session::initSession();
	if(!isset($_SESSION["juego"])){
		header("Location: Acceso.php");
	}
}