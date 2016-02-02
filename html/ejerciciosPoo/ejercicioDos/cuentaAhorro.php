<?php

class CuentaAhorro extends cuentaCorriente{
    private $interes;
    
    public function __construct(Titular $titular, $numCuenta, $saldo=15.3,$interes=2.5){
        parent::__construct($titular,$numCuenta,$saldo);
        $this->interes=$interes;
    }
    
    public function getInteres(){
        return $this->interes;
    }
    
    public function calcularInteres(){
        $this->setSaldo($this->getSaldo()+$this->getSaldo()*$this->interes/100);
    }
    
    public function __toString(){
        return parent::__toString()."interes: $this->interes";
    }
}