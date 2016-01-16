<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Acceso usuarios</h2>
    <form name="formulario" method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <label>Usuario</label><input type="text" name="nombre"><br/>
        <label>Clave</label><input type="password" name="clave"><br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>