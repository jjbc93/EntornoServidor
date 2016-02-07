<?php
class Conexion{

	public static function crearConexion(){
		try {
			$conexion = new mysqli("localhost", "root", "", "curriculum");
		} catch (mysqli_sql_exception $e) {
			echo $e;
		}

		return $conexion;
	}

	public static function cerrarConexion($conexion){
		$conexion->close();
	}
}