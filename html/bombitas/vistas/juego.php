<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Juego</title>
    <style type="text/css">
       td, button{width: 40px;
           height: 40px;
           color:white;}
    </style>
</head>
<body>
    <table border="1">
       <?=$juego->getIntentos()?>
        <?php for($i=0;$i<$juego->getFilas();$i++){?>
            <tr>
               <?php for ($j=0;$j<$juego->getColumnas();$j++){?>
                  <form method="post" >
                      <td><button type="submit" formaction="Autentificado.php?ejex=<?=$i?>&ejey=<?=$j?>"><?=$juego->getFachada()[$i][$j]?></button></td>
                  </form>
                   
              <?php } ?>
            </tr>
        <?php }?>
    </table>
   	<?php if(isset($mensaje)){ ?>
		<h2><?=$mensaje?></h2>
		<form method="post" action="Autentificado.php";>
			<input type="submit" value="volver a jugar"/>
		</form>
	<?php } ?>
</body>
</html>