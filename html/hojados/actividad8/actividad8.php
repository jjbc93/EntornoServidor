<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio7</title>
        
    </head>
    <body>
        <h1>Convierte pie y pulgadas a centimetros</h1>
            <p> Escribe una distancia en pies y pulgadas y la convertiré a centímetros. </p>
            <form name="formulario" method="post" action="actividad8.php">
            <p>Pies<input type="number" name="pie">Kg</p>
            <p>Pulgadas<input type="number" name="pulgada">cm</p>
            <input type="submit" value="Calcular"><br/>
            </form>
    </body>
</html>
<?php
$pie=$_REQUEST["pie"];
$pulgada=$_REQUEST["pulgada"];
//$convertirPie=
$resultado=($pulgada*2.54)+($pie*12)*2.54;
echo "$pie pies y $pulgada pulgadas son $resultado cm";
?>

