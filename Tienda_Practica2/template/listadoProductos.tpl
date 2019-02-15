<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Listado</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <div class="container-fluid">
            <div>
                <header class="container">
                    <form style="float: right; margin-left: 15px" action="controlador.php" method="POST"><input type="submit" name="desconectar" value="desconectar" class="btn btn-secondary"></form>
                    <span style="float: right"> Usuario : <span style="color: red;">{$user}</span>
                    </span>
                </header>
            </div>
            <div >
                <section class="container">

                    <table class="table table-striped table-dark">
                        <thead >
                            <tr>
                                {foreach from=$campos item=campo}
                                    <th>{$campo}</th>
                                {/foreach}</tr> 
                        </thead>
                        <tbody>
                            <tr>
                                {foreach name=outer item=contact from=$productos}

                                    {foreach key=key item=item from=$contact}
                                        <td>{$item}</td>
                                    {/foreach}
                                    <td><form action="#"><input type="submit" class="btn btn-light"name="añadir" value="añadir"></form></td> </tr>

                            {/foreach}               
                        </tbody> 

                    </table>

                </section>
            </div>
        </div>
    </body>
</html>