<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Asignatura
 *
 * @author Sammy Guergachi <sguergachi at gmail.com>
 */
class Asignatura {
    private $identificador;
    private $calificacion_double;
    
    public function __construct($id) {
       $this->identificador=$id;
       $this->calificacion_double=0;
    }
    
    function getIdentificador() {
        return $this->identificador;
    }

    function getCalificacion_double() {
        return $this->calificacion_double;
    }
    
    function setCalificacion_double($nota) {
        
        $this->calificacion_double = $nota;
    }



}
