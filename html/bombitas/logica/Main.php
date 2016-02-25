<?php
    require_once "Coordenada.php";
    require_once "Juego.php";
    $coordenada= new Coordenada(1,2);

    $juego = new Juego(1);
    /*
        for($i=0; $i<$juego->getFilas();$i++){
        for($j=0; $j<$juego->getColumnas();$j++){
            $juego->getTablero()[$i][$j]="a";
        }
    }*/

   /* $juego->rellenarTablero();
    for($i=0; $i<$juego->getFilas();$i++){
        for($j=0; $j<$juego->getColumnas();$j++){
           echo $juego->getTablero()[$i][$j]. " ";
        }
        echo "<br/>";
    }*/
    $juego->pintarTablero();
    $juego->rellenarTablero();
  
 for($i=0; $i<$juego->getFilas();$i++){
     
        for($j=0; $j<$juego->getColumnas();$j++){
           echo $juego->getTablero()[$i][$j]. " ";
        }
     
        echo "<br/>";
    }



/*http://localhost/encuentrabombas/logica/Main.php*/
 /*echo $coordenada->getEjeX() ."<br>";
 echo $coordenada->getEjeY() ."<br>";*/