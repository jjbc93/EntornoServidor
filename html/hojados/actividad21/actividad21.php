<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio21</title>
    </head>
    <body>
        <h1>Comprueba primalidad</h1>
        <p>Escribe un número entero positivo y te diré si es un número primo.</p>
        <form name="formulario" method="post">
            <p>Horizontal:<input type="number" name="horizontal"/></p>
            <p>Vertical:<input type="number" name="vertical"/></p>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>
<?php
if (isset($_REQUEST["horizontal"]) || isset($_REQUEST["vertical"])) {
    $horizontal = $_REQUEST["horizontal"];
    $vertical = $_REQUEST["vertical"];
    if (empty($horizontal) || empty($vertical)) {
        echo("Debes introducir horizontal y vertical");
    } else {
       echo("<table border=1>");
for ($i = 0; $i <= $vertical; $i++) {
    if ($i == 0) {
        echo("<tr>");
        echo("<th>X</th>");
        for ($x = 1; $x <= $horizontal; $x++) {
            echo("<th>" . $x . "</th>");
        }
        echo("</tr>");
    } else {
        echo("<tr>");
        echo("<th>" . $i . "</th>");
        for ($j = 1; $j <= $horizontal; $j++) {
            echo("<td>" . ($i * $j) . "</td>");
        }
        echo("</tr>");
    }
}
echo("</table>");
    }
}
?>