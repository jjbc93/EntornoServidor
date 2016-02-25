<?php
include "../../../privada/EncuentraBombas/Config/config.php";
comprobarAcceso();
if(!$_REQUEST){
	include PRIVADA . "../Vistas/inicioJuego.php";
}else{
	header("Location: Game.php");
}