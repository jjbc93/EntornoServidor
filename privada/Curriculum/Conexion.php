<?php
class Conexion{
	public static function crearConexion(){
		$conexion = new mysqli("localhost","root","","prueba");
		return $conexion;
	}
	
	public static function cerrarConexion($conexion){
		$conexion->close();
	}
}

//prueba