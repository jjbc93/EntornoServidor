<?php
require_once "Coordenada.php";
class Juego{
    //Atributos de la clase
    private $dificultad;
    private $tablero;
    private $intentos;
    private $coordenadas;
    private $fachada;
    private $filas;
    private $columnas;
    private $numeroBombas;
    //Constantes
    const FACIL=1;
    const MEDIO=2;
    const DIFICIL=3;

    public function __construct($dificultad){
        $this->dificultad=$dificultad;
        $this->intentos=0;
        $this->coordenadas= array();
        $this->fachada = array();
        self::iniciarPartida();
    }

    public function iniciarPartida(){
        switch($this->dificultad){
            case self::FACIL:
                $this->filas=5;
                $this->columnas=5;
                $this->numeroBombas=3;
                break;
            case self::MEDIO:
                $this->filas=7;
                $this->columnas=7;
                $this->numeroBombas=10;
                break;
            case self::DIFICIL:
                $this->filas=8;
                $this->columnas=8;
                $this->numeroBombas=15;
                break;
        }
        self::pintarTablero();
        while(count($this->coordenadas)!=$this->numeroBombas){
            self::generarBomba();
        }
        self::rellenarTablero();
    }

    public function generarBomba(){
        $existe=false;
        $x=rand(0,$this->filas-1);
        $y=rand(0,$this->columnas-1);
        foreach($this->coordenadas as $coordenada){
            if($coordenada->getEjeX()==$x && $coordenada->getEjeY()==$y){
                $existe= true;
            }
        }
        if($existe!=true){
            $coordenada= new Coordenada($x,$y);
            array_push($this->coordenadas,$coordenada);
        }       
    }


    public function rellenarTablero(){
        foreach($this->coordenadas as $coordenada){
            $this->tablero[$coordenada->getEjeX()][$coordenada->getEjeY()] = "<img src='../bomba.png' height='30px' width='30px'/>";
        }
    }
	
	public function pintarTablero(){
        for($i=0; $i<$this->filas;$i++){
            for($j=0; $j<$this->columnas;$j++){
                $this->tablero[$i][$j]="a";
                $this->fachada[$i][$j]="";
            }
        }
    }

    public function jugar($x,$y){
        $this->fachada[$x][$y]=$this->tablero[$x][$y];
    }
	
	public function finalizarPartida(){
		foreach($this->coordenadas as $coordenada){
		  self::jugar($coordenada->getEjeX(),$coordenada->getEjeY());
		}
	}
	
	public function ganar(){
		$aciertos=0;
		for($i=0; $i<$this->filas;$i++){
            for($j=0; $j<$this->columnas;$j++){
               if($this->fachada[$i][$j]=="a"){
				   $aciertos++;
			   }
            }
        }
		if($aciertos+$this->numeroBombas == $this->filas*$this->columnas){
			echo count($this->tablero);
			return true;
		}
	}

    //Getters and setters
    public function getFilas(){
        return $this->filas;
    }

    public function getColumnas(){
        return $this->columnas;
    }

    public function getIntentos(){
        return $this->intentos;
    }

    public function getTablero(){
        return $this->tablero;
    }

    public function getDificultad(){
        return $this->dificultad;
    }

    
    
    public function getFachada(){
        return $this->fachada;
    }
}