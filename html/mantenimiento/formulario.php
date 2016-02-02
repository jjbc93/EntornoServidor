<?php
 session_start();
 $fila=$_SESSION["fila"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="formulario" method="post" action="controlador.php?peticion=procesarFormulario">
            Color<input type="text" name="color" value="<?=$fila["color"]?>"/>
            Potencia<input type="number" name="potencia" value="<?=$fila["potencia"]?>"/>
            <input type="submit" value="Enviar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>


