<?php
require_once "../logica/Juego.php";
require_once "../logica/Coordenada.php";
require_once "../config/Session.php";
Session::initSession();
if(!isset($_SESSION["juego"])){
	$juego = new Juego(1);
	$_SESSION["juego"]=$juego;
}
$juego = $_SESSION["juego"];

if(!$_REQUEST){
    include "../vistas/juego.php";
}else{
    $ejex=$_REQUEST["ejex"];
    $ejey=$_REQUEST["ejey"];
    $juego->jugar($ejex,$ejey);
	
	if($juego->ganar()){
		$mensaje="Has ganado!".$_SESSION["nick"];
		unset($_SESSION["juego"]);
	}
	if($juego->getFachada()[$ejex][$ejey]=="<img src='../bomba.png' height='30px' width='30px'/>"){
		$juego->finalizarPartida();
		$mensaje="Has perdido ".$_SESSION["nick"];
		unset($_SESSION["juego"]);
	}
    include "../vistas/juego.php";
}


