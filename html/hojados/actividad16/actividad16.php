<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio16</title>
        
    </head>
    <body>
            <p>Escribe una distancia en cm y la convertire a km, m y cm</p>
            <form name="formulario" method="post" action="actividad16.php">
            <p>Distancia<input type="number" name="distancia"> 
            <input type="submit" value="Convertir"><br/>
            </form>
    </body>
</html>
<?php
if(isset($_REQUEST["distancia"])){
    $distancia=$_REQUEST["distancia"];
    if(empty($distancia)){
        echo "Debe introducir una distancia valida";
    }else{
       $km=  round($distancia/1000);
       $m= round ($distancia/100);
       $cm = round($distancia%100);
       if($km==0 && $m==0){
           echo "$distancia cm son $cm cm";
       }else if($km==0 && $m!=0){
           echo "$distancia cm son $m m y $cm cm";
       }else{
           echo "$distancia cm son $km km $m m y $cm cm";
       }
    }
}
?>