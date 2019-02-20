<?php
/* Smarty version 3.1.33, created on 2019-02-20 12:31:58
  from 'C:\wamp\www\carpetTienda\Tienda_Practica7\template\pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6d48beb15402_44783368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '320f569cce9cccce73e92e40faae809697fa6396' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica7\\template\\pagar.tpl',
      1 => 1550665896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6d48beb15402_44783368 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pagar</title>
        <link rel="stylesheet" type="text/css"  href="css/estilos.css">
    </head>
    <body class="pagproductos">

        <div id="contenedor">

            <form style="float: right; margin-left: 15px" action="controlador.php" method="POST"><input type="submit" name="desconectar" value="desconectar" class="btn btn-secondary"></form>
            <span style="float: right"> Usuario : <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span></span>
            <h1>Resumen de factura del usuario  <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span></h1>
            <h4 style="text-align:right">Fecha: <?php echo $_smarty_tpl->tpl_vars['Fechahoy']->value;?>
</h4>
            <hr />
            <br class="divisor" />

            <div class="pago">
                <table id="tablaPagar" class="pago">
                    <thead>
                        <tr class="pago"><th class="pago">Articulo</th>
                            <th class="pago">Cantidad</th>
                            <th class="pago">Precio Unitario</th></tr>

                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'contact', false, 'key', 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['contact']->value) {
?>
                        <tr class="pago">
                            <td class="pago"> <span class="font-weight-light" style="float: left"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span></td>
                            <td class="pago"> <span class="font-weight-light" style="float: left"><?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
</span></td></tr>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

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
                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cantidadProductos']->value;?>
</td>
                    </tr>
                    <tr>
                        <td class="pago">Precio total Sin iva</td>
                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['TotalsinIva']->value;?>
</td>
                    </tr>
                    <tr>
                        <td class="pago">IVA</td>
                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['TotalconIva']->value;?>
</td></td>
                    </tr>
                    <tr>
                        <td class="pago">TOTAL pagar</td>
                        <td class="pago"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['TotalResumen']->value);?>
</td>
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


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'contact', false, 'key', 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['contact']->value) {
?>
                        <input type="hidden" name="quantify_1" value="5">
                        <input type="hidden" name="item_name_1" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                        <input type="hidden" name="amount_1" value="1000">
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <input type="hidden" name="item_name" value="Compra de <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">

                    <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
                </form>
            </div>



            <input type="hidden" name="item_name" value="Compra de dwes">
            <input type="hidden" name="amount" value="950">

        </div>




    </div>
</body>
</html><?php }
}
