<?php
/*
include "../../../privada/Ahorcado/Logica/Juego.php";
include "../../../privada/Ahorcado/Config/Config.php";
require_once PRIVADA . "Session.php";
require_once JUEGO . "Ahorcado.php";
Session::initSession();

$juego = $_SESSION["juego"];



echo $juego->getPalabra();
var_dump($juego->getPalabraGuiones()); 

$juanjo= " h o l a";

echo str_replace(" ","",$juanjo);

$arr =array_values($juego->rellenarPalabraGuiones());
var_dump($arr);

foreach($arr as $campo){
	echo $campo;
}
if(!$_REQUEST){
	include JUEGO . "../Vistas/pantallaJuego.php";
}else{
	$letra=$_REQUEST["letra"];
	echo $letra;
	$juego ->comprobarLetra($letra);	
}
*/


