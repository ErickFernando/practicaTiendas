<?php
/* Smarty version 3.1.33, created on 2019-02-20 12:16:15
  from 'C:\wamp\www\carpetTienda\Tienda_Practica7\template\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6d450fa46fe0_06168751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cdc42d968c502d0095b1e3e74c680098bc7fe52' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica7\\template\\productos.tpl',
      1 => 1550512574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listadoProductos.tpl' => 1,
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5c6d450fa46fe0_06168751 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <div class="container-fluid">
          
                <div class="row">
                    <div class="col-md-8 col-lg-8">
                        <?php $_smarty_tpl->_subTemplateRender("file:listadoProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <?php $_smarty_tpl->_subTemplateRender("file:cesta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
           
        </div>
    </body>
</html><?php }
}
