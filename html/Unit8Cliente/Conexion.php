<?php
class Conexion{
    
    public static function crearConexion(){
        $conexion = new mysqli("localhost","root","","ajax");
        return $conexion;
    }
    
    public static function cerrarConexion($conexion){
        $conexion->close();
    }
}