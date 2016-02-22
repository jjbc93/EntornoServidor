<?php

class Conexion{
	
	public static function crearConexion(){
		$con= mysqli_connect("localhost","root","","helena");
		return $con;
	}
	
	public static function cerrarConexion($con){
		mysqli_close($con);
	}
}