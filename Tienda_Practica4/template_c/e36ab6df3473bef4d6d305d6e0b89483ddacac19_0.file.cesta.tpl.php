<?php
/* Smarty version 3.1.33, created on 2019-02-18 19:18:56
  from 'C:\wamp\www\carpetTienda\Tienda_Practica4\template\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6b0520d5df51_57507905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36ab6df3473bef4d6d305d6e0b89483ddacac19' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica4\\template\\cesta.tpl',
      1 => 1550517535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6b0520d5df51_57507905 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
                <?php if (!empty($_smarty_tpl->tpl_vars['productosCesta']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productosCesta']->value, 'contact', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                        <span class="font-weight-light"><?php echo $_smarty_tpl->tpl_vars['contact']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value[2];?>
$</span>
                        <br/>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                <?php } else { ?>
                    <span class="font-weight-light"> Cesta Vacia</span>
                <?php }?>
            </section>
        </div>
        <div class="container-fluid bg-dark text-white">
            <section >
                <span class="font-weight-light"><?php if (!empty($_smarty_tpl->tpl_vars['total']->value)) {?>Total <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
$<?php }?> </span>
            </section>
        </div>
    </body>
</html><?php }
}
