<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio20</title>
    </head>
    <body>
        <p>Escribe un número entero positivo y te diré si es un número primo.</p>
        <form name="formulario" method="post">
            <p>Número:<input type="number" name="numero"/></p>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>
<?php
if (isset($_REQUEST["numero"])) {
    $numero = $_REQUEST["numero"];
    if (empty($numero)) {
        echo("Debes introducir un número");
    } else {
        $cont = 0;
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $cont++;
            }
        }
        if ($cont > 1) {
            echo "$numero  no es primo";
        } else {
            echo "$numero  es primo";
        }
    }
}
?>