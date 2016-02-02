<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio9</title>
        
    </head>
    <body>
            <p>Escribe la altura y la anchura y dibujaré un rectángulo de estrellas
            de ese tamaño</p>
            <form name="formulario" method="post" action="actividad18.php">
            <p>Altura<input type="number" name="altura">
            <p>Anchura<input type="number" name="anchura"> 
                
            <input type="submit" value="Dibujar"><br/>
            </form>
    </body>
</html>
<?php
if(isset($_REQUEST["altura"]) || ($_REQUEST["anchura"])){
    $altura=$_REQUEST["altura"];
    $anchura=$_REQUEST["anchura"];
    if(empty($altura||$anchura)){
        echo "Debe introducir una altura  y una anchura";
    }else{
        for($i = 0; $i < $altura; $i++) {
           for($j = 0; $j < $anchura; $j++) {
               echo("* ");
           }
           echo("<br/>");
        }
    }
}
?>
