<?php
include "../../../privada/Ahorcado/Config/config.php";
include "../../../privada/Ahorcado/Logica/Juego.php";
require_once JUEGO . "Ahorcado.php";
require_once PRIVADA . "Session.php";
comprobarAcceso();
Session::initSession();

$juego = $_SESSION["juego"];
if(!$_REQUEST){
	include JUEGO . "../Vistas/pantallaJuego.php";
}else{
	$letra=$_REQUEST["letra"];
	if(preg_match("/^[A-Za-z]+/",$letra)){
		
		if($juego->comprobarLetraUsada($letra)){
			
			$_SESSION["error"]="no puedes introducir la misma letra";
			include JUEGO . "../Vistas/pantallaJuego.php";
		}else{
			if(strlen($letra)>1){
				$juego->comprobarVictoria($letra);
			}else{
				$juego->comprobarLetra($letra);
			}
		include JUEGO . "../Vistas/pantallaJuego.php";
		}
		
	}else{
		$_SESSION["error"]="Debe introducir una única letra";
		include JUEGO . "../Vistas/pantallaJuego.php";
	}
}