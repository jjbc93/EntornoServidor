<?php

require './abrirConexion.php';
session_start();
$peticion=$_REQUEST["peticion"];
$pagina=$_REQUEST["pagina"];

switch ($peticion){
    case "formularioRegistro":
        $_SESSION["action"]="registrar";
        $pagina="formulario.php";
        break;
    case "formularioModificar":
        $_SESSION["action"]="modificar";
        $pagina="formulario.php";
    case "procesarFormulario":
        $action=$_SESSION["action"];
        switch ($action){
            case "registrar";
            $color=$_REQUEST["color"];
            $potencia=$_REQUEST["potencia"];
            insertar($color, $potencia, $con);
            $pagina="inicio.php";
            case "modificar":
            //modificar
        }
}

    function insertar($color,$potencia,$conexion){
        $sql="INSERT INTO coches color,potencia VALUES '$color',$potencia";
        mysqli_query($con, $sql);
    }
  
  require 'cerrarConexion.php';
  
  header("Location: $pagina");
?>