<?php
include "../../../privada/Ahorcado/Config/config.php";
include "../../../privada/Ahorcado/Logica/Juego.php";
require_once JUEGO . "Ahorcado.php";
require_once PRIVADA . "Session.php";

if(!$_REQUEST){
	include PRIVADA . "../Vistas/login.php";
}else{
	Session::initSession();
	$nombre = $_REQUEST["nombre"];
	$dificultad = $_REQUEST["dificultad"];
	if(empty($nombre) || empty($dificultad)){
		$_SESSION["error"]="Debes introducir un nombre y marcar la dificultad";
	}
	if(isset($_SESSION["error"])){
		include PRIVADA . "../Vistas/login.php";
	}else{
		$_SESSION["nombre"]=$nombre;
		$juego = new Ahorcado ($dificultad);
		$_SESSION["juego"]=$juego;
		header("Location: Game.php");
	}
}
