<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
    <form name="formulario" method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <?php if(isset($errores["usuario"])){
        echo $errores["usuario"]."</br>";}?>
        
    <p>Usuario <input type="text" name="usuario" value="<?php if(isset($_REQUEST["usuario"])){
    
Validaciones:mostrarDatos($_REQUEST["usuario"]);}?>"/></p>

<?php if(isset($errores["clave"])){
    echo $errores["clave"]."</br>";}?>
    <p>Clave<input type="password" name="clave"><br/>
    <input type="submit" value="Enviar">
</body>
</html>