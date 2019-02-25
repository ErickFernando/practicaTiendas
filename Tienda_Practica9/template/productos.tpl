<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        {$getcss}
        {$getJS}
        {$getScript}
        <div  style="float:right">
            <header class="container" >
                <form style="float: right; margin-left: 15px" action="controlador.php" method="POST"><input type="submit" name="desconectar" value="desconectar" class="btn btn-secondary"></form>
                <span style="float: right"> Usuario : <span style="color: red;">{$user}</span>
                </span>
            </header>
        </div>
        <div class="container-fluid" style="float:left">
            <section>
                <form action="./productos.php" method="POST">
                    {include file="listadoProductos.tpl"}
                    {include file="cesta.tpl"}
                </form>
            </section>
        </div>
    </body>
</html>