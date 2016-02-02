<?php
require_once "Conexion.php";
class UsuarioModel{
	
	public static function obtenerUsuario($nick){
		$conexion = Conexion::crearConexion();
		$sql = "Select * from usuario where nick=?";
		$query = $conexion->prepare($sql);
		$query->bind_param("s",$nick);
		$query->execute();
		$resultado=$query->get_result();
		$resultadoFinal=$resultado->fetch_assoc();
		Conexion::cerrarConexion($conexion);
		var_dump($resultadoFinal);
		return $resultadoFinal;
	}
	
	public static function obtenerExperiencia($nick){
		$conexion = Conexion::crearConexion();
		$sql = "Select * from experiencia where usuario=?";
		$query = $conexion->prepare($sql);
		$query->bind_param("s",$nick);
		$query->execute();
		$resultado=$query->get_result();
		$resultadoFinal=$resultado->fetch_all(MYSQLI_ASSOC);
		Conexion::cerrarConexion($conexion);
		echo "hola";
		var_dump($resultadoFinal);
		return $resultadoFinal;
	}
	
	
}