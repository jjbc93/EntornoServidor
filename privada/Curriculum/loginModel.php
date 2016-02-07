<?php
require_once "Conexion.php";
class loginModel{
	
	public static function comprobarLogin($nick,$clave){
		$encontrado = false;
		$conexion = Conexion::crearConexion();
		$sql = "SELECT * FROM usuario WHERE nick=? AND clave=?";
		$query = $conexion->prepare($sql);
		$query->bind_param("ss",$nick,$clave);
		$query->execute();
		$query->store_result();
		if($query->num_rows!=0){
			$encontrado=true;
		}
		Conexion::cerrarConexion($conexion);
		return $encontrado;
	}
	
	public static function comprobarUsuario($nick){
		$encontrado = false;
		$conexion = Conexion::crearConexion();
		$sql = "SELECT * FROM usuario WHERE nick=?";
		$query = $conexion->prepare($sql);
		$query->bind_param("s",$nick);
		$query->execute();
		$query->store_result();
		if($query->num_rows!=0){
			$encontrado=true;
		}
		Conexion::cerrarConexion($conexion);
		return $encontrado;
	}
}