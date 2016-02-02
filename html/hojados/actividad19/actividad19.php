<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio19</title>
    </head>
    <body>
        <h1>Calcula Divisores</h1>
        <p>Escribe un número entero positivo y te diré sus divisores.</p>
        <form name="formulario" method="post">
            <p>Número:<input type="number" name="numero"/></p>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>
<?php
if(isset($_REQUEST["numero"])){
    $numero=$_REQUEST["numero"];
    if(empty($numero)){
        echo 'Debe introducir un número';
    }else{
        $divisores="";
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $divisores= $divisores. $i." ";
            }
            
        }
        echo "Los divisores de $numero son $divisores";
    }
}
?>
