<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio9</title>
        
    </head>
    <body>
            <h1>Convierte segundos a minutos</h1>
            <p> Escribe una cantidad de segundos y la convertiré a minutos y segundos.</p>
            <form name="formulario" method="post" action="actividad9.php">
            <p>segundos<input type="number" name="segundos"></p>
            <input type="submit" value="Convertir"><br/>
            </form>
    </body>
</html>
<?php
if (isset($_REQUEST["segundos"])){
    $segundos = $_REQUEST["segundos"];
    if(empty($segundos)){
        echo 'Debe introducir los segundos para el cálculo';
    }else{
        $minutos = floor($segundos/60);
        $segundosRestantes = $segundos%60;
        echo $segundos ." segundos son $minutos minutos y $segundosRestantes segundos";
    }
}
?>
