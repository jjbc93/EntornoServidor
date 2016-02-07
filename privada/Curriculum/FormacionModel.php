<?php
require_once "Conexion.php";

class FormacionModel{
    
   /**
	Método que se encarga de obtener la formacion seleccionada de la BD
	@parameter $nick (identificador del usuario)
	@return Los datos de la formacion cargados de la BD de un usuario
	*/
	public static function obtenerFormacion($nick){
		$conexion = Conexion::crearConexion();
		$sql = "Select * from formacion where identUsuario=?";
		$query = $conexion->prepare($sql);
		$query->bind_param("s",$nick);
		$query->execute();
		$resultado = $query->get_result();
		$resultadoFinal = $resultado->fetch_all(MYSQLI_ASSOC);
		Conexion::cerrarConexion($conexion);
		return $resultadoFinal;
	}
    
	/**
	Método para insertar una nueva formacion en la BD
	@parameter Una array de datos que seran los nuevos valores
	@return mensaje, con la operación efectuado sobre la BD
	*/
    public static function insertarFormacion($datos){
        $conexion = Conexion::crearConexion();
        $sql = "INSERT INTO formacion (centro,fechaInicio,fechaFin,titulo,clasificacion,identUsuario)
		VALUES(?,?,?,?,?,?)";
        $query = $conexion->prepare($sql);
        $query->bind_param("ssssis", $datos["centro"],$datos["fechaInicio"],$datos["fechaFin"],
						   $datos["titulo"],$datos["clasificacion"],$datos["identUsuario"]);
        $query->execute();
        $query->store_result();
        if($query->affected_rows==1){
            $mensaje = "formacion insertada";
        }else{
            $mensaje = "no se ha podido insertar una formacion, pruebe más tarde";
        }
        Conexion::cerrarConexion($conexion);
		return $mensaje;
    }
	
    /**
	Método para eliminar una formacion en la BD
	@parameter el id de la experiencia seleccionada
	@return mensaje, con la operación efectuado sobre la BD
	*/
    public static function eliminarFormacion($idFormacion,$nick){
        $conexion = Conexion::crearConexion();
        $sql = "DELETE FROM formacion WHERE id=? AND identUsuario=?";
        $query = $conexion->prepare($sql);
        $query->bind_param("is",$idFormacion,$nick);
        $query->execute();
        $query->store_result();
        if($query->affected_rows==1){
            $mensaje ="formacion eliminada";
        }else{
            $mensaje ="no se ha podido eliminar una formacion, pruebe más tarde";
        }
        Conexion::cerrarConexion($conexion);
        return $mensaje;
    }
    
	/**
	Método para modificar una formacion en la BD
	@parameter Una array de datos que seran los nuevos valores, mas id seleccionado
	@return mensaje, con la operación efectuado sobre la BD
	*/
    public static function modificarFormacion($datos,$idFormacion,$nick){
        $conexion = Conexion::crearConexion();
        $sql = "UPDATE formacion set centro=?,fechaInicio=?,fechaFin=?,titulo=?,clasificacion=? 
		WHERE id=? AND identUsuario=?";
        $query = $conexion->prepare($sql);
        $query->bind_param("ssssiis", $datos["centro"],$datos["fechaInicio"],$datos["fechaFin"],
				$datos["titulo"],$datos["clasificacion"],$idFormacion,$nick);
        $query->execute();
        $query->store_result();
        if($query->affected_rows==1){
            $mensaje ="formacion modificada";
        }else{
            $mensaje ="no se ha podido modificar una formacion, pruebe más tarde";
        }
        Conexion::cerrarConexion($conexion);
		return $mensaje;
    }
}