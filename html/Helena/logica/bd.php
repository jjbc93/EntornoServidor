<?php
require_once "Conexion.php";
class Bd{
	
	public static function insertar($datos){
		$con=Conexion::crearConexion();
		$sql = "INSERT INTO usuario (nick,clave) VALUES (?,?)";
		$query = mysqli_prepare($con,$sql);
		mysqli_stmt_bind_param($query,"ss",$datos["nick"],$datos["clave"]);
		mysqli_stmt_execute($query);
		Conexion::cerrarConexion($con);
	}
	
	public static function eliminar($datos){
		$con=Conexion::crearConexion();
		$sql = "DELETE FROM usuario where nick=?";
		$query = mysqli_prepare($con,$sql);
		mysqli_stmt_bind_param($query,"s",$datos["nick"]);
		mysqli_stmt_execute($query);
		Conexion::cerrarConexion($con);
	}
	
	public static function modificar($datos){
		$con=Conexion::crearConexion();
		$sql = "UPDATE usuario set clave=?";
		$query = mysqli_prepare($con,$sql);
		mysqli_stmt_bind_param($query,"s",$datos["clave"]);
		mysqli_stmt_execute($query);
		Conexion::cerrarConexion($con);
	}
	
	public static function obtener($nick){
		$con=Conexion::crearConexion();
		$sql = "SELECT * from usuario where nick=?";
		$query = mysqli_prepare($con,$sql);
		mysqli_stmt_bind_param($query,"s",$nick);
		mysqli_stmt_execute($query);
		$resultado = mysqli_stmt_get_result($query);
		$resultadoFinal = mysqli_fetch_assoc($resultado);
		Conexion::cerrarConexion($con);
		return $resultadoFinal;
	}
	
	public static function comprobar($nick,$clave){
		$con=Conexion::crearConexion();
		$sql = "SELECT * FROM usuario WHERE nick=? AND clave=?";
		$query = mysqli_prepare($con,$sql);
		mysqli_stmt_bind_param($query,"ss",$nick,$clave);
		mysqli_stmt_execute($query);
		$resultado=mysqli_stmt_get_result($query);
		if(mysqli_num_rows($resultado)!=0){
			Conexion::cerrarConexion($con);
			return true;
		}
		Conexion::cerrarConexion($con);
		return false;
	}
}