<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio9</title>
        
    </head>
    <body>
            <p>Escribe una temperatura en grados celsius o fahrenheit y la 
            convertire a la otra unidad celsius o fahrenheit</p>
            <form name="formulario" method="post" action="actividad15.php">
            <p>temperatura<input type="number" name="grados"> 
                <select name="temperatura">
                    <option value="f">Fahrenheit</option>
                    <option value="c">Celsius</option>
                </select></p>
            <input type="submit" value="Convertir"><br/>
            </form>
    </body>
</html>
<?php
if(isset($_REQUEST["grados"])){
    $grados=$_REQUEST["grados"];
    if(empty($grados)){
        echo 'Debe introducir una temperatura';
    }else{
        $temperatura=$_REQUEST["temperatura"];
        switch ($temperatura){
            case "f":
                $fahrenheit=  round((1.8*$grados+32),1);
                echo "$grados ºC equivalen a $fahrenheit ºF";
                break;
            case "c":
                $celsius = round((($grados-32)/1.8),1);
                echo "$grados ºF equivalen a $celsius ºC";
        }
    }
}
?>