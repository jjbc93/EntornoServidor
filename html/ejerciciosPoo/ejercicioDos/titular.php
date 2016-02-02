<?php

class Titular{
    private $nombre;
    private $apellido;
    private $edad;
    
    public function __construct($nombre,$apellido,$edad){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
    }
    
    public function __toString(){
        return "El cliente $this->nombre $this->apellido tiene $this->edad años";
    }
}