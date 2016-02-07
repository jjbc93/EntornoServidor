<?php
require_once "Conexion.php";
class UsuarioModel{
	
	/**
	Método que se encarga de obtener un usuario seleccionada de la BD
	@parameter $nick (identificador del usuario)
	@return Los datos del usuario cargados de la BD
	*/
	public static function obtenerUsuario($nick){
		$conexion = Conexion::crearConexion();
		$sql = "Select * from usuario where nick=?";
		$query = $conexion->prepare($sql);
		$query->bind_param("s",$nick);
		$query->execute();
		$resultado=$query->get_result();
		$resultadoFinal=$resultado->fetch_assoc();
		Conexion::cerrarConexion($conexion);
		return $resultadoFinal;
	}
	
	/**
	Método para insertar un nuevo usuario en la BD
	@parameter Una array de datos que seran los nuevos valores
	@return mensaje, con la operación efectuado sobre la BD
	*/
	public static function insertarUsuario($datos){
		$conexion = Conexion::crearConexion();
		$sql = "INSERT INTO usuario (nick,nombre,clave,apellidos,fechaNacimiento,telefono,direccion)
		VALUES (?,?,?,?,?,?,?)";
		$query = $conexion->prepare($sql);
		$query->bind_param("sssssis",$datos["nick"],$datos["nombre"],$datos["clave"],$datos["apellidos"],
						   $datos["fechaNacimiento"],$datos["telefono"],$datos["direccion"]);
		$query->execute();
		$query->store_result();
		if($query->affected_rows==1){
			$mensaje="usuario insertado";
		}else{
			$mensaje=" no se ha podido insertar el usuario, pruebe más tarde";
		}
		Conexion::cerrarConexion($conexion);
		return $mensaje;
	}
	
	/**
	Método para eliminar un usuario en la BD
	@parameter el nick del usuario seleccionado
	@return mensaje, con la operación efectuado sobre la BD
	*/
	public static function eliminarUsuario($nick){
		$conexion = Conexion::crearConexion();
		$sql = "DELETE FROM usuario where nick=?";
		$query=$conexion->prepare($sql);
		$query->bind_param("s",$nick);
		$query->execute();
		$query->store_result();
		if($query->affected_rows==1){
			$mensaje="usuario eliminado";
		}else{
			$mensaje=" no se ha podido eliminar el usuario, pruebe más tarde";
		}
		Conexion::cerrarConexion($conexion);
		return $mensaje;
	}
	
	/**
	Método para modificar un usuario en la BD
	@parameter Una array de datos que seran los nuevos valores, mas nick seleccionado
	@return mensaje, con la operación efectuado sobre la BD
	*/
	public static function modificarUsuario($datos,$nick){
		$conexion = Conexion::crearConexion();
		$sql = "UPDATE usuario set nombre=?, clave=?, apellidos=?, fechaNacimiento=?, telefono=?, direccion=? WHERE nick=?";
		$query=$conexion->prepare($sql);
		$query->bind_param("ssssiss",$datos["nombre"],$datos["clave"],$datos["apellidos"],
				$datos["fechaNacimiento"],$datos["telefono"],$datos["direccion"],$nick);
		$query->execute();
		$query->store_result();
		if($query->affected_rows==1){
			$mensaje="usuario modificado";
		}else{
			$mensaje=" no se ha podido modificar el usuario, pruebe más tarde";
		}
	}
	
}