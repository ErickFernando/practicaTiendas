<?php
/* Smarty version 3.1.33, created on 2019-02-25 22:33:57
  from 'C:\wamp\www\carpetTienda\Tienda_Practica9\template\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c746d5559a448_87999082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7ea09f96e8898d9b644433c608d130f0c0f1f89' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica9\\template\\productos.tpl',
      1 => 1551134035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listadoProductos.tpl' => 1,
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5c746d5559a448_87999082 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <?php echo $_smarty_tpl->tpl_vars['getcss']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['getJS']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['getScript']->value;?>

        <div  style="float:right">
            <header class="container" >
                <form style="float: right; margin-left: 15px" action="controlador.php" method="POST"><input type="submit" name="desconectar" value="desconectar" class="btn btn-secondary"></form>
                <span style="float: right"> Usuario : <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span>
                </span>
            </header>
        </div>
        <div class="container-fluid" style="float:left">
            <section>

                <form action="./productos.php" method="POST">

                    <?php $_smarty_tpl->_subTemplateRender("file:listadoProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                    <?php $_smarty_tpl->_subTemplateRender("file:cesta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </form>

            </section>
        </div>
    </body>
</html><?php }
}
