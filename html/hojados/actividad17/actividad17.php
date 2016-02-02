<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio9</title>
        
    </head>
    <body>
            <p>Escribe un número e indica si quieres que calcule el factorial o
            el sumatorio desde 1 hasta el número</p>
            <form name="formulario" method="post" action="actividad17.php">
            <p>Numero<input type="number" name="numero"> 
                <select name="opcion">
                    <option value="sumatorio">Sumatorio</option>
                    <option value="factorial">Factorial</option>
                </select></p>
            <input type="submit" value="Calcular"><br/>
            </form>
    </body>
</html>
<?php
if(isset($_REQUEST["numero"])){
    $numero=$_REQUEST["numero"];
    if(empty($numero)){
        echo "Debe introducir un número";
    }else{
        $opcion=$_REQUEST["opcion"];
        switch ($opcion){
            case "sumatorio":
                $sumatorio=0;
                for($i=1; $i<=$numero; $i++){
                    $sumatorio= $sumatorio+$i;
                }
                echo "La suma de 1 hasta $numero es $sumatorio";
                break;
            case "factorial":
                $factorial=1;
                for($i=1; $i<=$numero; $i++){
                    $factorial= $factorial*$i;
                }
                echo "El factorial de $numero es $factorial";
               
            
        }
    }
}
?>
