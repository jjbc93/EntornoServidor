<?php
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio</title>
        
    </head>
    <body>
        <table border="1">
            <caption>Numeros decimales</caption>
            <?php for($i=0;$i<5;$i++){ ?>
                <tr>
                    <?php for($j=0;$j<5;$j++){ ?>
                        <td><?=$i?>,<?=$j?></td>
                    <?php }?>
                </tr>
            <?php }?>
        </table>
    </body>
</html>

