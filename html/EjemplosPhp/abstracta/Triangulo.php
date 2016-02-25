<?php

class Triangulo extends Figura{

    public function __construct(){

    }

    public function calcularArea($base,$altura){
        $area = ($base*$altura)/2;
        return $area;
    }

    public function calcularPerimetro($lado){
        return $lado*3;
    }
}
