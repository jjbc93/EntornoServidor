<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
     <div class="contenedor">
            <h1>Bienvenido al Ahorcado</h1>
            <form name="formulario" method="post" action="Acceso.php">
                <label>Introduce nombre</label>
                <input type="text" name="nombre"/><br/>
                <label>Dificultad</label>
                <select name="dificultad">
                    <option value="facil">facil</option>
                    <option value="media">media</option>
                    <option value="dificil">dificil</option>
                </select><br/>
                <input type="submit" value="Jugar"/>
            </form>
        </div>
</body>
</html>