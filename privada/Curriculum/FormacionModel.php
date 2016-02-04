<?php
require_once "Conexion.php";

class FormacionModel{
    
    public static function obtenerFormacion($nick){
        $conexion = Conexion::CrearConexion();
        $sql = "SELECT * FROM formacion WHERE usuario=?"
        $query = $conexion->prepare($sql);
        $query->bind_param("s",$nick);
        $query->execute();
        $resultado = $query->get_result();
        $resultadoFinal = $resultado->fetch_all(MYSQLI_ASSOC);
        Conexion:cerrarConexion($conexion);
        return $resultadoFinal;
    }
    
    public static function insertarFormacion($datos){
        $conexion = Conexion::crearConexion();
        $sql = "INSERT INTO formacion (campos formacion)";
        $query = $conexion->prepare($sql);
        $query->bind_param("ssss",campos formacion);
        $query->execute();
        $query->store_result();
        if($query->affected_rows==1){
            $mensaje = "formacion insertada";
        }else{
            $mensaje = "no se ha podido insertar una formacion, pruebe más tarde";
        }
        Conexion::cerrarConexion($conexion);
    }
    
    public static function eliminarFormacion($idFormacion){
        $conexion = Conexion::crearConexion();
        $sql = "DELETE FROM formacion WHERE id=?";
        $query = $conexion->prepare($sql);
        $query->bind_param("i",$idFormacion);
        $query->execute();
        $query->store_result();
        if($query->affected_rows==1){
            $mensaje ="formacion eliminada";
        }else{
            $mensaje ="no se ha podido eliminar una formacion, pruebe más tarde";
        }
        Conexion::cerrarConexion($conexion);
        return $mensaje;
    }
    
    public static function modificarFormacion($datos,$idFormacion){
        $conexion = Conexion::crearConexion();
        $sql = "UPDATE formacion set campos y su value";
        $query = $conexion->prepare($sql);
        $query->bind_param("sssss", "datos formacion");
        $query->execute();
        $query->store_result();
        if($query->affected_rows==1){
            $mensaje ="formacion modificada";
        }else{
            $mensaje ="no se ha podido modificar una formacion, pruebe más tarde";
        }
        Conexion::cerrarConexion($conexion);
    }
}