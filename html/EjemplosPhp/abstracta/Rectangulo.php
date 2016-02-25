<?php

    class Rectangulo extends Figura{

        private $base;
        private $altura;
        public function __construct($base,$altura){
            $this->base =$base;
            $this->altura=$altura;

        }

        public function calcularArea($otro=2){
            return $this->base*$this->altura;
        }

        public function calcularPerimetro($base,$altura){
            $area= (2*$base)+(2*$altura);
            return $area;
        }
    }
