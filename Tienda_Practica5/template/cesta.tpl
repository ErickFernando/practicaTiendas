<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cesta</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <div class="container-fluid">
            <header >
                <h3>Cesta</h3>
            </header>
        </div>
        <div class="container-fluid bg-dark text-white">
            <section >
                {if !empty($productosCesta)}
                    {foreach name=outer item=contact from=$productosCesta}
                        <span class="font-weight-light">{$contact[0]} {$contact[1]} {$contact[2]}$</span>
                        <br/>

                    {/foreach} 
                {else}
                    <span class="font-weight-light"> Cesta Vacia</span>
                {/if}
            </section>
        </div>
        <div class="container-fluid bg-dark text-white">
            <section >
                <span class="font-weight-light">{if !empty($total)}Total {$total}${/if} </span>
            </section>
        </div>
    </body>
</html>