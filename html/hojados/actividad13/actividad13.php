<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio7</title>
        
    </head>
    <body>
        <h1>Escribe tres números y compare si hay números iguales</h1>
            <form name="formulario" method="post" action="actividad13.php">
            <p>Primer número<input type="number" name="numeroUno"></p>
            <p>Segundo número<input type="number" name="numeroDos"></p>
            <p>Tercer número<input type="number" name="numeroTres"></p>
            <input type="submit" value="Comparar"><br/>
            </form>
    </body>
</html>
<?php
if(isset($_REQUEST["numeroUno"])|| ($_REQUEST["numeroDos"])||($_REQUEST["numeroTres"])){
    $numeroUno=$_REQUEST["numeroUno"];
    $numeroDos=$_REQUEST["numeroDos"];
    $numeroTres=$_REQUEST["numeroTres"];
    if(empty($numeroUno)||($numeroDos)||($numeroTres)){
        echo "Debe introducir los tres números";
    }else{
        if($numeroUno==$numeroDos && $numeroUno==$numeroTres){
            echo "Los tres números son iguales";
        }else if($numeroUno==$numeroDos || $numeroUno == $numeroTres || $numeroDos== $numeroTres){
            echo "Uno de los números se encuentra dos veces";
        }else{
            echo "No coincide ningún número";
        }
    }
}
?>
