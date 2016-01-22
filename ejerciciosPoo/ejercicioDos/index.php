<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio2Poo</title>
</head>
<body>
    
</body>
<?php
require_once 'titular.php';
require_once 'cuentaCorriente.php';
/*require_once 'cuentaAhorro.php';*/

$titular = new Titular("juanjo","bernabe",18);
$cuenta= new CuentaCorriente($titular,"12345",25);
$cuenta2= new CuentaCorriente($titular,"12345",25);
echo $titular."<br>";
echo $cuenta->mostrarCuenta()."<br>";
echo $cuenta->restarSaldo(10)."<br>";
echo $cuenta->mostrarCuenta()."<br>";
 if($cuenta->compararCuentas($cuenta2)){
     echo "son iguales";
 }else{
     echo "son distintas";
 }
    
/*$cuenta->ingresarSaldo(1000);
$cuenta->restarSaldo(500);
echo $cuenta;

    $cuenta3 = new CuentaAhorro(new Titular("juana","moya",35)"777");*/
?>
</html>
