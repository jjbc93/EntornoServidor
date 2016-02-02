<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Acceso usuarios</h2>
    <form name="formulario" method="post" action="<?=$_SERVER['PHP_SELF']?>">
       <?php if(isset($errores["usuario"])){
            echo $errores["usuario"]."</br>";}?>
            
        <label>Usuario</label><input type="text" name="usuario" value="<?php if(isset($_POST["usuario"])){      Validaciones::mostrarDatos($_POST["usuario"]);}?>"><br/>
         <?php if(isset($errores["clave"])){
            echo $errores["clave"]."</br>";}?>
        <label>Clave</label><input type="password" name="clave"><br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>