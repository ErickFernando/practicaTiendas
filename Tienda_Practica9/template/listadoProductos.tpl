


    <div  style="float:left">
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
                                <td><button onclick='JaxonRespuestaAjax.addP("{$contact['cod']}");'>Añadir</button></td></tr>
                                {/foreach}                     
                            </tbody> 

                        </table>

                    </section>
                </div>
         
