<?php
/* Smarty version 3.1.33, created on 2019-02-19 12:58:54
  from 'C:\wamp\www\carpetTienda\Tienda_Practica6\template\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6bfd8ee38e67_78874500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0803bc86f260996b9c8ed02dd69bacf5b7066da8' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica6\\template\\cesta.tpl',
      1 => 1550579873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6bfd8ee38e67_78874500 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cesta</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <div class="container-fluid">
            <header >
                <h3>Cesta</h3>
            </header>
        </div>
        <div class="container-fluid" style="background-color: #CECBCB">
            <section >
                <?php if (!empty($_smarty_tpl->tpl_vars['productosCesta']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productosCesta']->value, 'contact', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                        <span class="font-weight-light" style="float: left"><?php echo $_smarty_tpl->tpl_vars['contact']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value[2];?>
$</span>
                        <form action="productos.php" method="POST" ><input type="hidden" name="cod" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value[1];?>
">
                            <input type="submit" class="btn btn-dark" style="border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px" name="quitar" value="quitar" ></form>
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
                <span class="font-weight-light" style="float: left"><?php if (!empty($_smarty_tpl->tpl_vars['total']->value)) {?>Total <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
$<?php }?> </span>
                <form action="productos.php" method="post">
                    <?php echo $_smarty_tpl->tpl_vars['input']->value;?>

                   <?php echo $_smarty_tpl->tpl_vars['input2']->value;?>

                </form>
            </section>
        </div>
    </body>
</html><?php }
}
