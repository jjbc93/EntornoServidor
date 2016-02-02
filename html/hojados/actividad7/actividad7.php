

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio7</title>
        
    </head>
    <body>
        <h1>índice de masa corporal - Formulario</h1>
            <p> Escribe tu peso y altura, calcularé tu índice de masa corporal</p>
            <form name="formulario" method="post" action="actividad7.php">
            <p>Peso<input type="number" name="peso">Kg</p>
            <p>Altura<input type="number" name="altura">cm</p>
            <input type="submit" value="Calcular"><br/>
            </form>
    </body>
</html>

<?php 
$altura = $_REQUEST["altura"];
$peso = $_REQUEST["peso"];
$imc = $peso / ($altura*$altura)*10000;
echo "Con un peso de $peso Kg y una altura de $altura cm, tu índice de masa corporal es $imc";
?>