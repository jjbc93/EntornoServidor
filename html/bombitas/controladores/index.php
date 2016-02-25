<?php
require_once "../bd/LoginModel.php";
require_once "../config/Session.php";
require_once "../logica/Juego.php";
if(!$_REQUEST){
    include "../vistas/login.html";
}else{
    Session::initSession();
    $nick=$_REQUEST["nick"];
    $clave=$_REQUEST["clave"];
    if(empty($nick) || empty($clave)){
        $_SESSION["error"]="Debes introducir todos los datos";
    }else if (!LoginModel::comprobarLogin($nick,$clave)){
        $_SESSION["error"]="Usuario o clave incorrectos";
    }else{
      $juego = new Juego(1);
      $_SESSION["juego"]=$juego;
    }
    if(isset($_SESSION["error"])){
        include "../vistas/login.html";
    }else{
        header("Location: Autentificado.php");
    }
}