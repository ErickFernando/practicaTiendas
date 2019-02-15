<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LOGGIN-TIENDA</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <h2>{if !empty($msj)}{$msj}{/if}</h2>
        <fieldset>
            <legend>Atentificate</legend>
            <form action="loggin.php" method="POST">
                <label>Usuario</label>
                <input type="text" name="user"><br/>
                <label>Contraseña</label>
                <input type="password" name="pass">
                <input type="submit" name="conectar" value="Conectar">
            </form>
        </fieldset>
    </body>
</html>