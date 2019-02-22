<?php
/* Smarty version 3.1.33, created on 2019-02-22 16:28:16
  from 'C:\wamp\www\carpetTienda\Tienda_Practica9\template\listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7023202a4982_07114969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef3dda4d3fa866ba374af992700d07e497bba6e9' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica9\\template\\listadoProductos.tpl',
      1 => 1550852881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7023202a4982_07114969 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Listado</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">

    </head>
    <body>


        <?php echo '<script'; ?>
>
            function add2(cod) {
                JaxonRespuestaAjax.addP(cod);
                return false;
            }

        <?php echo '</script'; ?>
>
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
                                <th>Nombre</th>
                                <th>PVP</th>
                            </tr> 
                        </thead>
                        <tbody>

                            <tr> 
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'contact', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                                    <?php if (($_smarty_tpl->tpl_vars['contact']->value['familia'] == 'ORDENA')) {?>
                                        <td> <a href="descripcion.php?productos=<?php echo $_smarty_tpl->tpl_vars['contact']->value['cod'];?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value['nombre_corto'];?>
</a>
                                        <?php } else { ?>
                                        <td> <?php echo $_smarty_tpl->tpl_vars['contact']->value['nombre_corto'];?>

                                        </td><?php }?> 
                                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['PVP'];?>
</td>
                                        <td><button onclick='add2("<?php echo $_smarty_tpl->tpl_vars['contact']->value['cod'];?>
");'>Añadir</button></td></tr>
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
