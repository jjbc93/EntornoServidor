<?php
require_once "Conexion.php";
class LoginModel{
    
    public static function comprobarLogin($nick,$clave){
        $conexion = Conexion::crearConexion();
        $sql = "Select * from usuario where nick=? and clave=?";
        $query = $conexion->prepare($sql);
        $query->bind_param("ss",$nick,$clave);
        $query->execute();
        $query->store_result();
        if($query->num_rows!=0){
            Conexion::cerrarConexion($conexion);
            return true;
        }
        Conexion::cerrarConexion($conexion);
    }
    
    public static function comprobarUsuario($nick){
        Conexion::crearConexion();
        $sql="Select * from usuario where nick=?";
        $query=$conexion->prepare($sql);
        $query->bind_param("s",$nick);
        $query->execute();
        $query->store_result();
        if($query->num_rows!=0){
            Conexion::cerrarConexion($conexion);
            return true;
        }
        Conexion::cerrarConexion($conexion);
        return false;
    }
}