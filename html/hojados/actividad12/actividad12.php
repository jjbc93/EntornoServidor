<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio7</title>
        
    </head>
    <body>
        <h1>Escribe dos números y comparé si uno es múltiplo del otro o no</h1>
            <form name="formulario" method="post" action="actividad12.php">
            <p>Un número<input type="number" name="numeroUno"></p>
            <p>Otro número<input type="number" name="numeroDos"></p>
            <input type="submit" value="Comparar"><br/>
            </form>
    </body>
</html>
<?php
if(isset($_REQUEST["numeroUno"]) || ($_REQUEST["numeroDos"])){
    $numeroUno=$_REQUEST["numeroUno"];
    $numeroDos=$_REQUEST["numeroDos"];
    if(empty($numeroUno || $numeroDos)){
    echo "Debe introducir ambos números ";
    }else{
        if($numeroUno%$numeroDos==0){
        echo "$numeroUno es multiplo de $numeroDos";
        }else{
        echo "no es múltiplo";
    }
}
}
?>