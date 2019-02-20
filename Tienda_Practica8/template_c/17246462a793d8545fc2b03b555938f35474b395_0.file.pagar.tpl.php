<?php
/* Smarty version 3.1.33, created on 2019-02-19 20:07:32
  from 'C:\wamp\www\carpetTienda\Tienda_Practica6\template\pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6c6204d9f4d4_77167306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17246462a793d8545fc2b03b555938f35474b395' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica6\\template\\pagar.tpl',
      1 => 1550606852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6c6204d9f4d4_77167306 (Smarty_Internal_Template $_smarty_tpl) {
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
            </div>



            <input type="hidden" name="item_name" value="Compra de dwes">
            <input type="hidden" name="amount" value="950">

        </div>




    </div>
</body>
</html><?php }
}
