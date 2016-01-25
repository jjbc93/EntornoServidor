<?php
echo "hola";
include "../../../privada/CurriculumVitae/Validaciones.php";
if(!$_REQUEST){
    include "../../../privada/CurriculumVitae/login.php";
}else{
    $errores=[];
    $campos=["usuario","clave"];
    
    $_REQUEST=Validaciones::validarEntrada($_POST,$campos);
    
    if(($error=Validaciones::validarUsuario($_POST["usuario"]))!==true){
        $errores["usuario"]=$error;
    }
    if($error=Validaciones::validarClave($_REQUEST["clave"])!==true){
        $errores["clave"]=$error;
    }
    if($errores){
        include "../../../privada/CurriculumVitae/login.php";
    }else{
        echo "todo esta bien";
    }
}