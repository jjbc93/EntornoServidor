<?php
    
    class Circulo extends Figura{
        
    public function __construct(){
        
    }
        
    public function calcularArea($pi=pi(),$radio){
        
        return $pi*pow($radio,2);
    }
    
   /* public function calcularVolumen($pi=pi(),$radio){
        $area = 4/3 * $pi*pow($radio,3);
        return $area;
    }*/
}