<?php
class Conexion{
	
	public static function crearConexion(){
		$conexion = new mysqli("localhost","root","","bombas");
		return $conexion;
	}
	
	public static function cerrarConexion($conexion){
		$conexion->close();
	}
}