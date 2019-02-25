
<div style="float:left">
    <div class="container">
        <header >
            <h3>Cesta</h3>
        </header>
    </div>
    <div class="container" style="background-color: #CECBCB">
        <section>

            {if !empty($productosCesta)}
                {foreach name=outer item=contact from=$productosCesta}
                    <span class="font-weight-light" style="float: left">{$contact[0]} {$contact[1]} {$contact[2]}$</span>
                    <button onclick='JaxonRespuestaAjax.removP("{$contact[1]}");' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px'>Quitar</button><br/>
                {/foreach} 

            {else}
                <span class="font-weight-light"> Cesta Vacia</span>

            {/if}

        </section>

    </div>

    <div class="container bg-dark text-white">
        <section >
            <span class="font-weight-light" style="float: left">{if !empty($total)}Total {$total}${/if} </span>
            <form action="productos.php" method="post">
                {$input}
            </form>
            {$input2}
        </section>
    </div>
</div>