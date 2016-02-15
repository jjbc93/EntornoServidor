<?php
class Ahorcado{
	private $palabra;
	private $numeroIntentos;
	private $dificultad;
	private $cadenaPalabraGuiones;
	private $cadenaPalabraGuionesNoEspacios;
	private $letrasUsadas=[];
	private $comunicado;
	private $palabrasFacil;
	private $palabrasMedio;
	private $palabrasDificil;
	private $palabraGuiones;
	const FACIL =1;
	const MEDIO =2;
	const DIFICIL =3;


	public function __construct($dificultad){
		$this->dificultad=$dificultad;
		$this->palabrasFacil=["juanjo", "Luis", "Fernando", "Helena", "Javi", "David", "Noelia", "Sergio", "Carmelo", "Ivan"];
		$this->palabrasMedio=["guitarra", "zanahoria", "verde", "extranjero", "oveja", "primavera", "habitacion", "columpio", "gobierno", "matematicas"];
		$this->palabrasDificil=["television", "exento", "isosceles", "excentrico", "oracion", "agazapado", "bohemio", "hastiado", "ineptitud", "idiosincrasia"];

		//Generar palabra aleatoria
		self::generarPalabraAleatoria($dificultad);
		//Rellenar palabraGuiones con guiones
		self::rellenarPalabraGuiones();
		//Inicializo cadenaPalabraGuiones
		self::convertirArrayGuiones();
	}


	public function generarPalabraAleatoria($dificultad){
		switch($dificultad){
			case self::FACIL:
				$this->numeroIntentos=10;
				$this->palabra=array_rand($this->palabrasFacil);
				$this->palabra=strtoupper($this->palabrasFacil[$this->palabra]);
				break;
			case self::MEDIO:
				$this->numeroIntentos=7;
				$this->palabra=array_rand($this->palabrasMedio);
				$this->palabra=strtoupper($this->palabrasMedio[$this->palabra]);
				break;
			case self::DIFICIL:
				$this->numeroIntentos=5;
				$this->palabra=array_rand($this->palabrasDificil);
				$this->palabra=strtoupper($this->palabrasDificil[$this->palabra]);
				break;
		}
	}

	public function rellenarPalabraGuiones(){
		for ($i=0; $i< strlen($this->palabra); $i++){
			$this->palabraGuiones[$i]="_ ";
		}
	}

	public function comprobarLetra($letra){
		if($this->numeroIntentos<1){
			$this->comunicado=" lo sentimos no te quedan intentos vuelve a intentarlo";
		}else{
			$letra=strtoupper($letra);
			$this->letrasUsadas[]=$letra;
			$pos=strpos($this->palabra,$letra);
			if($pos!==false){
				for ($i=0; $i<strlen($this->palabra);$i++){
					if(substr($this->palabra,$i,1)==$letra){
						$this->palabraGuiones[$i]=$letra." ";
					}
				}
			}else{
				$this->numeroIntentos--;
			}

			self::convertirArrayGuiones();
			$this->cadenaPalabraGuionesNoEspacios=
				str_replace(" ", "",$this->cadenaPalabraGuiones);
			self::comprobarVictoria();
		}
	}

	public function comprobarLetraUsada($letra){
		$letra=strtoupper($letra);
		foreach ($this->letrasUsadas as $campo){
			if($letra==$campo){
				return true;
			}
		}
		return false;
	}



	public function comprobarVictoria($palabra=false){
		if($palabra){
			if($this->numeroIntentos<1){
				$this->comunicado=" lo sentimos no te quedan intentos vuelve a intentarlo";
				return false;
			}
			$palabra=strtoupper($palabra);
			if($this->palabra==$palabra){
				$this->comunicado=" enhorabuena has ganado";
				$this->numeroIntentos=0;
				$this->cadenaPalabraGuionesNoEspacios=$palabra;
				return true;
			}else{
				$this->numeroIntentos--;
				return false;
			}
		}else{
			if($this->palabra==$this->cadenaPalabraGuionesNoEspacios){
				$this->comunicado=" enhorabuena has ganado";
				$this->numeroIntentos=0;
				return true;
			}else{
				$this->comunicado=" lo sentimos no te quedan intentos vuelve a intentarlo";
				return false;
			}
		}
	}


	public function convertirArrayGuiones(){
		$cadena=implode("", $this->palabraGuiones);
		$this->cadenaPalabraGuiones = $cadena;
	}

	public function getPalabra(){
		return $this->palabra;
	}

	public function getPalabraGuiones(){
		return $this->palabraGuiones;
	}

	public function getLetrasUsadas(){
		return $this->letrasUsadas;
	}

	public function getNumeroIntentos(){
		return $this->numeroIntentos;
	}

	public function getComunicado(){
		return $this->comunicado;
	}

	public function getCadenaPalabraGuiones(){
		return $this->cadenaPalabraGuiones;
	}

	public function getCadenaPalabraGuionesNoEspacios(){
		return $this->cadenaPalabraGuionesNoEspacios;
	}
	/*public function comprobarPalabra($palabra){
		$palabra=strtoupper($palabra);
		if($this->palabra==$palabra){
			$this->comunicado=" enhorabuena has ganado";
			$this->numeroIntentos=0;
			return true;
		}else{
			$this->numeroIntentos--;
			$this->comunicado=" lo sentimos no te quedan intentos vuelve a intentarlo";
			return false;
		}
	}*/
	/*public function rellenarComunicado(){
		if($this->palabra==$this->cadenaPalabraGuionesNoEspacios){
			$this->comunicado=" enhorabuena has ganado";
			$this->numeroIntentos=0;
		}else if($this->palabra!=$this->cadenaPalabraGuionesNoEspacios){
			$this->comunicado=" lo sentimos no te quedan intentos vuelve a intentarlo";
		}
	}*/
}