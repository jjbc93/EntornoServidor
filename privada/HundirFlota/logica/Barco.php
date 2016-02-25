<?php
class Barco{
	private $tBarco;
	private $juego;
	private $coordenada;
	private $coordenadas;
	private $direccion;
	
	public function __construct(){
		$pintado=false;
		$x=self::calcularAleatorio();
		while($pintado==false){
			
		}
	}
	
	calcularAleatorio($menor,$mayor){
		return rand($menor,$mayor);
	}
}