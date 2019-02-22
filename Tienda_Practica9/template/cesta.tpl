<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cesta</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <script>
            /**
             * funcion que recibe el codigo del producto a añadir
             * y lo enviar mediante ajax
             * @param {type} cod
             * @returns {Boolean}
             */
            function remov2(cod) {

                JaxonRespuestaAjax.removP(cod);
                return false;
            }
            /**
             * funcion que recibe el codigo y lo envia mediante
             * ajax a la otra funcion para ser eliminado
             * @returns {Boolean}
             */
            function vaciar2() {

                JaxonRespuestaAjax.vaciarLista();
                return false;
            }
        </script>
        <div class="container-fluid">
            <header >
                <h3>Cesta</h3>
            </header>
        </div>
        <div class="container-fluid" style="background-color: #CECBCB">
            <section >

                {if !empty($productosCesta)}
                    {foreach name=outer item=contact from=$productosCesta}
                        <span class="font-weight-light" style="float: left">{$contact[0]} {$contact[1]} {$contact[2]}$</span>
                        <button onclick='remov2("{$contact[1]}");' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px'>Quitar</button><br/>
                    {/foreach} 

                {else}
                    <span class="font-weight-light"> Cesta Vacia</span>

                {/if}

            </section>

        </div>

        <div class="container-fluid bg-dark text-white">
            <section >
                <span class="font-weight-light" style="float: left">{if !empty($total)}Total {$total}${/if} </span>
                <form action="productos.php" method="post">
                    {$input}
                </form>
                {$input2}
            </section>
        </div>
    </body>
</html>