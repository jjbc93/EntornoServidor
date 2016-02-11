<?php
include "../../../privada/Curriculum/config.php";
require_once PRIVADA . "ExperienciaModel.php";
require_once PRIVADA . "FormacionModel.php";
require_once PRIVADA . "UsuarioModel.php";
require_once PRIVADA . "Session.php";

Session::initSession();
$nick= $_SESSION["usuario"]["nick"];
$listaExperiencias = ExperienciaModel::obtenerExperiencia($nick);
$listaFormacion = FormacionModel::obtenerFormacion($nick);
$usuario= UsuarioModel::obtenerUsuario($nick);
include PRIVADA . "Vistas/mostrarDatos.php";