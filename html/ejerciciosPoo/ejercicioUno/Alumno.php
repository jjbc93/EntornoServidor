<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author Sammy Guergachi <sguergachi at gmail.com>
 */
class Alumno {
    
    private $asignaturaUno;
    private $asignaturaDos;
    private $asignaturaTres;
    
    public function __construct(Asignatura $asig1=null,  Asignatura $asig2=null, Asignatura $asig3=null) {
        $this->asignaturaUno=$asig1;
        $this->asignaturaDos=$asig2;
        $this->asignaturaTres=$asig3;
    }
    
    
    
    function getAsignaturaUno() {
        return $this->asignaturaUno;
    }

    function getAsignaturaDos() {
        return $this->asignaturaDos;
    }

    function getAsignaturaTres() {
        return $this->asignaturaTres;
    }
    
    public function ponerNota(){
        
    }

    
    
}
