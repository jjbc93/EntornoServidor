<?php
include "../privada/validaciones.php";
if(!$_POST){
    include "../privada/login.php";
    
}else{
  /* Hemos recibido los datos */
    /*Creo un array de los campos que deben estar*/
   
    /* if(!isset($_POST["usuario"])){
        $_POST["usuario"]="";
    
    }
    if(!isset($_POST["clave"])){
        $_POST["clave"]="";
    }*/
    $errores=[];
    
    $campos=["usuario","clave"];
    
    $_POST=Validaciones::validarEntrada($_POST,$campos);
    
    if(($error = Validaciones::validarUsuario($_POST["usuario"])) !== true){
        $errores["usuario"] = $error;
    }
    if(($error = Validaciones::validarClave($_POST["clave"])) !==true){
        $errores["clave"] = $error;
    }
    
    if($errores){
        include "../privada/login.php";
    }else{
        echo "todo esta bien";
    }
    
    
    
}

