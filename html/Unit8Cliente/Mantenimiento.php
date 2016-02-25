<?php
require_once "Conexion.php";
class Mantenimiento{
    
    public static function mostrarDatos($provincia){
        $conexion = Conexion::crearConexion();
        $sql = "Select * from personas where provincia =?";
        $query = $conexion->prepare($sql);
        $query->bind_param("s",$provincia);
        $query->execute();
        
    }
}