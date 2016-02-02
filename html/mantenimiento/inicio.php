<?php
     require 'abrirConexion.php';
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
    </head>
    <body>
        <table>
            <caption>Coches</caption>    
            <tr>
                <th>ID</th>
                <th>COLOR</th>
                <th>POTENCIA</th>
            </tr>  
            <?php 
              while ($fila= mysqli_fetch_assoc($result)){
            ?>      
            <tr>
                <td><?=$fila['id']?></td>
                <td><?=$fila["color"]?></td>
                <td><?=$fila["potencia"]?></td>
                <td><a href="controlador.php?peticion=formularioModificar&id=<?=$fila['id']?>">modificar</a></td>
                <td><a href="controlador.php?peticion=eliminar2&id=<?=$fila['id']?>">borrar</a></td>
            </tr> 
              <?php }?>
        </table>
        <a href="controlador.php?peticion=formularioRegistro">nuevo</a>
    </body>
</html>
<?php
        require 'cerrarConexion.php';
?>
