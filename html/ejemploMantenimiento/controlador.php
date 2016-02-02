<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'abrirConexion.php';
session_start();
$accion = $_REQUEST["accion"];
$pagina="index.php";
switch($accion){
    case 1:
        $pagina="formulario.php";
        $_SESSION["fila"]=recogerDatos($con,$_REQUEST["id"]);
        break;
    case 3:
        $_SESSION["fila"]=inicializaDatos();
        $pagina="formulario.php";
        break;
    case 2:
        borrarDatos($con,$_REQUEST["id"]);
        break;
    }
    
    
    
    function recogerDatos($con,$id){
       $sql="Select id, color, potencia from coches where id=$id";
       $res = mysqli_query($con, $sql);
       if(!($fila= mysqli_fetch_assoc($res))){
          $fila["id"]="-1";
          $fila["color"]="";
          $fila["potencia"]="";
       }
       return $fila;
    }
    
    function inicializaDatos(){
        $fila["id"]="-1";
        $fila["color"]="";
        $fila["potencia"]="";
        return $fila;
    }
    
    function borrarDatos($con,$id){
       $sql="delete from coches where id=$id";
       mysqli_query($con, $sql);
    }
    
  require 'cerrarConexion.php';
  
  header("Location: $pagina");