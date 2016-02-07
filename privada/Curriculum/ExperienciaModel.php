<?php
require_once "Conexion.php";
class ExperienciaModel{

	/**
	Método que se encarga de obtener la experiencia seleccionada de la BD
	@parameter $nick (identificador del usuario)
	@return Los datos de la experiencia cargados de la BD de un usuario
	*/
	public static function obtenerExperiencia($nick){
		$conexion = Conexion::crearConexion();
		$sql = "Select * from experiencia where identUsuario=?";
		$query = $conexion->prepare($sql);
		$query->bind_param("s",$nick);
		$query->execute();
		$resultado=$query->get_result();
		$resultadoFinal=$resultado->fetch_all(MYSQLI_ASSOC);
		Conexion::cerrarConexion($conexion);
		return $resultadoFinal;
	}
	/**
	Método para insertar una nueva experiencia en la BD
	@parameter Una array de datos que seran los nuevos valores
	@return mensaje, con la operación efectuado sobre la BD
	*/
	public static function insertarExperiencia($datos){
		$conexion = Conexion::crearConexion();
		$sql = "INSERT INTO experiencia (empresa, cif, fechaInicio, fechaFin, cargo, funciones, identUsuario) VALUES (?,?,?,?,?,?,?)";
		$query = $conexion->prepare($sql);
		$query->bind_param("sssssss",$datos["empresa"],$datos["cif"],$datos["fechaInicio"],
						   $datos["fechaFin"],$datos["cargo"],$datos["funciones"],$datos["identUsuario"]);
		$query->execute();
		$query->store_result();
		if($query->affected_rows==1){
			$mensaje="experiencia insertada";
		}else{
			$mensaje=" no se ha podido insertar una experiencia, pruebe más tarde";
		}
		Conexion::CerrarConexion($conexion);
		return $mensaje;
	}
	
    /**
	Método para eliminar una experiencia en la BD
	@parameter el id de la experiencia seleccionada
	@return mensaje, con la operación efectuado sobre la BD
	*/
    public static function eliminarExperiencia($idExperiencia,$nick){
        $conexion = Conexion::crearConexion();
        $sql = "DELETE FROM experiencia where id=? AND identUsuario=?";
        $query = $conexion->prepare($sql);
        $query->bind_param("is",$idExperiencia,$nick);
        $query->execute();
        $query->store_result();
        if($query->affected_rows==1){
            $mensaje="experiencia eliminada";
		}else{
			$mensaje=" no se ha podido eliminar una experiencia, pruebe más tarde";
		}
        Conexion::cerrarConexion($conexion);
        return $mensaje;
    }
    
	/**
	Método para modificar una experiencia en la BD
	@parameter Una array de datos que seran los nuevos valores, mas id seleccionado
	@return mensaje, con la operación efectuado sobre la BD
	*/
    public static function modificarExperiencia($datos,$idExperiencia,$nick){
        $conexion = Conexion::crearConexion();
        $sql = "UPDATE experiencia set empresa=?, cif=?, fechaInicio=?, fechaFin=?,cargo=?, funciones=? WHERE id=? AND identUsuario=?";
        $query =  $conexion->prepare($sql);
        $query->bind_param("ssssssis",$datos["empresa"],$datos["cif"],$datos["fechaInicio"],$datos["fechaFin"],
                          $datos["cargo"],$datos["funciones"],$idExperiencia,$nick);
        $query->execute();
        $query->store_result();
        if($query->affected_rows==1){
            $mensaje="experiencia modificada";
		}else{
			$mensaje=" no se ha podido modificar una experiencia, pruebe más tarde";
        }
        Conexion::cerrarConexion($conexion);
        return $mensaje;
    }
}
