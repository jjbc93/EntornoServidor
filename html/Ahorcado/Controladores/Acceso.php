<?php
include "../../../privada/Ahorcado/Config/config.php";
require_once PRIVADA . "Session.php";
if(!$_REQUEST){
    include PRIVADA . "../Vistas/login.php";
}else{
    Session::initSession();
    $nombre = $_REQUEST["nombre"];
    $dificultad = $_REQUEST["dificultad"];
}

echo $dificultad;
echo $nombre;