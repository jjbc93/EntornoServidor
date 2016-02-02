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
}

/*Incluir donse se utilice, */