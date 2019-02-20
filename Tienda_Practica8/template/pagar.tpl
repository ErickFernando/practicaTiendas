<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pagar</title>
        <link rel="stylesheet" type="text/css"  href="css/estilos.css">
    </head>
    <body class="pagproductos">

        <div id="contenedor">

            <form style="float: right; margin-left: 15px" action="controlador.php" method="POST"><input type="submit" name="desconectar" value="desconectar" class="btn btn-secondary"></form>
            <span style="float: right"> Usuario : <span style="color: red;">{$user}</span></span>
            <h1>Resumen de factura del usuario  <span style="color: red;">{$user}</span></h1>
            <h4 style="text-align:right">Fecha: {$Fechahoy}</h4>
            <hr />
            <br class="divisor" />

            <div class="pago">
                <table id="tablaPagar" class="pago">
                    <thead>
                        <tr class="pago"><th class="pago">Articulo</th>
                            <th class="pago">Cantidad</th>
                            <th class="pago">Precio Unitario</th></tr>

                    </thead>
                    {foreach name=outer item=contact key=key from=$productos}
                        <tr class="pago">
                            <td class="pago"> <span class="font-weight-light" style="float: left">{$key}</span></td>
                            <td class="pago"> <span class="font-weight-light" style="float: left">{$contact}</span></td></tr>

                    {/foreach} 

                    <!-- <input name="item_number_" type="hidden" value="ACERAX3950" />
                     <input name="item_name_" type="hidden" value=""Acer AX3950 I5-650 4GB 1TB W7HP" />
                     <input name="amount_" type="hidden" value="410.00" />
                     <input name="quantity_" type="hidden" value="1" />
                    -->                        

                </table>
                <hr />
                <table>
                    <thead>
                        <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                    </thead>
                    <tr  class="pago">
                        <td class="pago">Total articulos</td>
                        <td class="pago">{$cantidadProductos}</td>
                    </tr>
                    <tr>
                        <td class="pago">Precio total Sin iva</td>
                        <td class="pago">{$TotalsinIva}</td>
                    </tr>
                    <tr>
                        <td class="pago">IVA</td>
                        <td class="pago">{$TotalconIva}</td></td>
                    </tr>
                    <tr>
                        <td class="pago">TOTAL pagar</td>
                        <td class="pago">{$TotalResumen|string_format:"%.2f"}</td>
                    </tr>
                </table>
                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" style="position: absolute;right:70%;top:62%">
                    <input name="cmd" type="hidden" value="_cart" />
                    <!--
                     Mi correo de pay pall identificador email ID en profile de mi cuenta de business
                    -->
                    <input name="business" type="hidden" value="erck196-facilitator@hotmail.com" />

                    <input name="shopping_url" type="hidden" value="http://tienda/pagar.php" />
                    <input name="currency_code" type="hidden" value="EUR" />
                    <input name="return" type="hidden" value="http://tienda/pagar.php" />
                    <input name="notify_url" type="hidden" value="http://tienda/pagar.php" />
                    <input name="rm" type="hidden" value="2" />


                    {foreach name=outer item=contact key=key from=$productos}
                        <input type="hidden" name="quantify_1" value="5">
                        <input type="hidden" name="item_name_1" value="{$key}">
                        <input type="hidden" name="amount_1" value="1000">
                    {/foreach}

                    <input type="hidden" name="item_name" value="Compra de {$user}">

                    <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
                </form>
            </div>



            <input type="hidden" name="item_name" value="Compra de dwes">
            <input type="hidden" name="amount" value="950">

        </div>




    </div>
</body>
</html>