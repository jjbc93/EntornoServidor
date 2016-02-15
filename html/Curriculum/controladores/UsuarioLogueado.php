<?php
include "../../../privada/Curriculum/config.php";
require_once PRIVADA . "ExperienciaModel.php";
require_once PRIVADA . "FormacionModel.php";
require_once PRIVADA . "UsuarioModel.php";
require_once PRIVADA . "Session.php";
comprobarAcceso();
Session::initSession();
$nick= $_SESSION["usuario"]["nick"];
if(isset($_REQUEST["resumen"])){
	
	$listaExperiencias = ExperienciaModel::obtenerExperiencia($nick);
	$listaFormacion = FormacionModel::obtenerFormacion($nick);
	$usuario= UsuarioModel::obtenerUsuario($nick);
	include PRIVADA . "Vistas/resumen.php";
}else{
	$listaExperiencias = ExperienciaModel::obtenerExperiencia($nick);
	$listaFormacion = FormacionModel::obtenerFormacion($nick);
	$usuario= UsuarioModel::obtenerUsuario($nick);
	include PRIVADA . "Vistas/mostrarDatos.php";
}
