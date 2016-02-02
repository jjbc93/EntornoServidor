<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <input type="text" name="color" value="<?=$fila["color"]?>"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
