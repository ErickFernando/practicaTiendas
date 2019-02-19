<?php
/* Smarty version 3.1.33, created on 2019-02-08 21:27:54
  from 'C:\wamp\www\carpetTienda\Tienda_Practica2\template\listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5df45aaa7d73_83919300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c6c57382b2aee9496211fcfbab7333d86929fbd' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica2\\template\\listadoProductos.tpl',
      1 => 1549622461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5df45aaa7d73_83919300 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
                    <span style="float: right"> Usuario : <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span>
                    </span>
                </header>
            </div>
            <div >
                <section class="container">

                    <table class="table table-striped table-dark">
                        <thead >
                            <tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campos']->value, 'campo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['campo']->value) {
?>
                                    <th><?php echo $_smarty_tpl->tpl_vars['campo']->value;?>
</th>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'contact', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <td><form action="#"><input type="submit" class="btn btn-light"name="añadir" value="añadir"></form></td> </tr>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>               
                        </tbody> 

                    </table>

                </section>
            </div>
        </div>
    </body>
</html><?php }
}
