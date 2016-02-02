<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio7</title>
        
    </head>
    <body>
        <h1>Escribe el dividendo y el divisor y calcularé el cociente y el resto de la división</h1>
            <p> Escribe una distancia en pies y pulgadas y la convertiré a centímetros. </p>
            <form name="formulario" method="post" action="actividad11.php">
            <p>Dividendo<input type="number" name="dividendo"></p>
            <p>Divisor<input type="number" name="divisor"></p>
            <input type="submit" value="Calcular"><br/>
            </form>
    </body>
</html>
<?php
if(isset($_REQUEST["dividendo"]) && ($_REQUEST["divisor"])){
    $dividendo=$_REQUEST["dividendo"];
    $divisor=$_REQUEST["divisor"];
    if(empty($dividendo) && ($divisor)){
        echo 'Debe introducir divisor y dividendo';
    }else{
        $cociente=floor($dividendo/$divisor);
        $resto=  floor($dividendo%$divisor);
        echo "dividendo $dividendo y divisor $divisor <br>";
        if($dividendo%$divisor==0){
            echo "La división es exacta con cociente $cociente y resto $resto"; 
        }else 
            echo "La división no es exacta su cociente es $cociente y su resto $resto";
    }
   }
?>