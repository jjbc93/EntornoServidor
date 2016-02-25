<?php
class Coordenada{
    private $ejeX;
    private $ejeY;
    
    public function __construct($ejeX,$ejeY){
        $this->ejeX=$ejeX;
        $this->ejeY=$ejeY;
    }
    
    public function getEjeX(){
        return $this->ejeX;
    }
    
    public function getEjeY(){
        return $this->ejeY;
    }
}