<?php
require_once 'titular.php';

class CuentaCorriente{
    private $titular;
    private $numeroCuenta;
    private $saldo;
    
    public function __construct(Titular $titular, $numCuenta, $saldo=15.3){
        $this->titular=$titular;
        $this->numeroCuenta=$numCuenta;
        $this->saldo=$saldo;
    }
    
    function getTitular(){
        return $this->titular;
    }
    
    function getNumeroCuenta(){
        return $this->numeroCuenta;
    }
    
    function getSaldo(){
        return $this->saldo;
    }
    
    function setSaldo($saldo){
       $this->saldo= $saldo;
    }
    
    function ingresarSaldo($ingreso){
        $this->saldo=$this->saldo+$ingreso;
    }
    
    function restarSaldo($retirada){
        $this->saldo=$this->saldo-$retirada;
    }
    
    function mostrarCuenta(){
        return "El número de cuenta $this->numeroCuenta tiene un saldo de $this->saldo €";
    }
    
    function compararCuentas(cuentaCorriente $cuenta){
        $resultado=false;
        
        if(strcmp($this->numeroCuenta,$cuenta->numeroCuenta)==0){
            $resultado=true;
    
        }
        return $resultado;
    }
}