<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Game</title>
	<link type="text/css" rel="stylesheet" href="../css/style.css"/>
</head>
<body>
	<div class="contenedor">
	<h1>Ahorcado</h1>
	<h2>Bienvenido <?=$_SESSION["nombre"]?></h2>
	<p>Número de intentos: <?=$juego->getNumeroIntentos()?></p>
	<p>La palabra es: <?=$juego->getPalabra()?></p>
	<p><?=$juego->getCadenaPalabraGuiones()?></p>
	<p>Letras Usadas: <?php if($juego->getLetrasUsadas()!=null){echo 
	implode(",",$juego->getLetrasUsadas());}?></p>
	<?php if($juego->getNumeroIntentos()!=0){?>
	<form name="formulario" method="post" action="Game.php">
		<p>Introduzca letra</p><input type="text" name="letra" autofocus=""/> 
		<input type="submit" value="Comprobar"/>
	</form>
	<?php }?>
	<?php if(isset($_SESSION["error"])){ ?>
		<p><?=$_SESSION["error"]?></p>
		<?php $_SESSION["error"]=null;?>
		<?php } ?>
	<?php if($juego->comprobarVictoria()){?>
	<p><?=$_SESSION["nombre"]?> <?=$juego->getComunicado()?></p>
	<?php Session::destroy();?>
	 <form name="formu" method="post" action="Acceso.php">
                <input type="submit" value="Volver a jugar">
            </form>
     <?php } else if($juego->getNumeroIntentos()==0 && $juego->comprobarVictoria()==false){?>
     <p><?=$_SESSION["nombre"]?> <?=$juego->getComunicado()?></p>
     <?php Session::destroy();?>
      <form name="formu" method="post" action="Acceso.php">
                <input type="submit" value="reintentar">
            </form>
      <?php }?>
      </div>
</body>
</html>