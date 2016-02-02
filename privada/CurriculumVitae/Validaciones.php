<?php
class Validaciones{
    public static function validarUsuario($usuario){
        $errores=false;
        $min=5;
        $max=12;
        if(empty($usuario)){
            $errores="Debe introducir un usuario";
        }else if(strlen(trim($usuario))<min || strlen(trim($usuario))>$max){
            $errores="Debe tener entre $min y $max caracteres";
        }
        
        if($errores){
            return $errores;
        }else{
            return true;
        }
    }
    
    public static function validarClave($clave){
        $errores=false;
        $min=5;
        $max=12;
        if(empty($clave)){
            $errores="Debe introducir una clave";
        }else if(strlen(trim($clave))<$min || strlen(trim($clave))>$max){
            $errores="Debe tener entre $min y $max caracteres";
        }
        if($errores){
            return $errores;
        }else{
            return true;
        }
    }
    
     //Recorro el array $campos donde estan guardados, los campos del formulario y entonces digo si el array$entrada que es como $_POST[] en la posición donde hay un value del formulario no tiene valor que la inicialize a ""
    /*$campos=["campo1" => "usuario", "campo2" => "clave"];
    $entrada['usuario']*/
    
    public static function validarEntrada($entrada,$campos){
        foreach ($campos as $clave=>$valor){
            if(!isset($entrada[$valor])){
                $entrada[$valor]="";
            }
        }
        return $entrada;
    }
    
    public static function mostrarDatos($dato){
        if(!empty($dato)){
            return $dato;
        }
    }
    
}