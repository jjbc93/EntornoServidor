<?php
require_once "Figura.php";
require_once "Rectangulo.php";

/*
function area(Figura $figura){
    
    $figura->calcularArea();
}
*/

$rectangulo = new Rectangulo(2,4);
echo $rectangulo->calcularArea();

