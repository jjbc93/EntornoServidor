<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio9</title>
        
    </head>
    <body>
            <h1>Escribe un año y calcularé si es bisiesto o no</h1>
            <form name="formulario" method="post" action="actividad14.php">
            <p>Año<input type="number" name="anio"></p>
            <input type="submit" value="Calcular"><br/>
            </form>
    </body>
</html>
<?php
if(isset($_REQUEST["anio"])){
    $anio=$_REQUEST["anio"];
    if(empty($anio)){
        echo 'Debe introducir un año';
    }else{
        if($anio%4 ==0 && ($anio%100 !=0 || $anio%400==0)){
            echo "El año $anio es bisiesto";
        }else{
            echo "El año $anio no es bisiesto";
        }
    }
}
?>
