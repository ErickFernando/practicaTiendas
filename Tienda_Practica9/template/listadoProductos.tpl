<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Listado</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">

    </head>
    <body>


        <script>
            function add2(cod) {
                JaxonRespuestaAjax.addP(cod);
                return false;
            }

        </script>
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
                                <th>Nombre</th>
                                <th>PVP</th>
                            </tr> 
                        </thead>
                        <tbody>

                            <tr> 
                                {foreach name=outer item=contact from=$productos}
                                    {if ($contact['familia'] eq 'ORDENA')}
                                        <td> <a href="descripcion.php?productos={$contact['cod']}">{$contact['nombre_corto']}</a>
                                        {else}
                                        <td> {$contact['nombre_corto']}
                                        </td>{/if} 
                                        <td>{$contact['PVP']}</td>
                                        <td><button onclick='add2("{$contact['cod']}");'>Añadir</button></td></tr>
                                        {/foreach}                     
                                    </tbody> 

                                </table>

                            </section>
                        </div>
                    </div>
                </body>
            </html>