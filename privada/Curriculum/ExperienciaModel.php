<?php
require_once "Conexion.php";
class ExperienciaModel{


	public static function obtenerExperiencia($nick){
		$conexion = Conexion::crearConexion();
		$sql = "Select * from experiencia where usuario=?";
		$query = $conexion->prepare($sql);
		$query->bind_param("s",$nick);
		$query->execute();
		$resultado=$query->get_result();
		$resultadoFinal=$resultado->fetch_all(MYSQLI_ASSOC);
		Conexion::cerrarConexion($conexion);
		/*var_dump($resultadoFinal);*/
		return $resultadoFinal;
	}
	/*insertarExperiencia($_REQUEST)*/
	public static function insertarExperiencia($datos){
		$conexion = Conexion::crearConexion();
		$sql = "INSERT INTO experiencia (empresa, cif, funciones,fecha_inicio,fecha_fin,ident_usuario)
	VALUES (?,?,?,?,?,?)";
		$query = $conexion->prepare($sql);
		$query->bind_param("ssssss",$datos["empresa"],$datos["cif"],$datos["funciones"],
						   $datos["fecha_inicio"],$datos["fecha_fin"],$datos["ident_usuario"]);
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
    
    
    public static function eliminarExperiencia($idExperiencia){
        $conexion = Conexion::crearConexion();
        $sql = "DELETE FROM experiencia where id=?";
        $query = $conexion->prepare($sql);
        $query->bind_param("i",$idExperiencia);
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
    
    public static function modificarExperiencia($datos,$idExperiencia){
        $conexion = Conexion::crearConexion();
        $sql = "UPDATE experiencia set empresa=?, cif=?, funciones=?, fecha_inicio=?,fecha_fin=?, ident_usuario=? WHERE id=?";
        $query =  $conexion->prepare($sql);
        $query->bind_param("ssssssi",$datos["empresa"],$datos["cif"],$datos["funciones"],$datos["fecha_inicio"],
                          $datos["fecha_fin"],$datos["ident_usuario"],$idExperiencia);
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
}

/*Incluir donse se utilice, */