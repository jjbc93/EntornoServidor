<?php
require "Conexion.php";
class UsuarioModel{
	
	public static function obtenerUsuario($nick){
		$conexion = Conexion::crearConexion();
		$sql = "Select * from usuario where nick=?";
		$query = $conexion->prepare($sql);
		$query->bindParam("s",$nick);
		$query->execute();
		$resultado=$query->fetch_assoc();
		Conexion::cerrarConexion($conexion);
		return $resultado;
	}
	
	
	
}