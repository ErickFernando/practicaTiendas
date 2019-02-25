<?php
/* Smarty version 3.1.33, created on 2019-02-25 11:54:39
  from 'C:\wamp\www\carpetTienda\Tienda_Practica9\template\descripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73d77f37c152_45467783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1699082c4c6f9f887fcb03888dc1afa05c33730f' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica9\\template\\descripcion.tpl',
      1 => 1550748959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73d77f37c152_45467783 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Descripción</title>
        <style>
            h4{
                margin-left: 15px;
            }
            p{
            margin-left: 16px;
            }
        </style>
    </head>
    <body>

        <div>
            <header style="background-color: #CCC0C0">
                <h2 style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['desc']->value['nombre_corto'];?>
</h2>
                <h5>
                    Codigo: <?php echo $_smarty_tpl->tpl_vars['ordenador']->value['cod'];?>

                </h5>
            </header>
            <section style="background-color:#E4E0E0">
                <h4 >Procesador</h4><p><?php echo $_smarty_tpl->tpl_vars['ordenador']->value['procesador'];?>
</p>

                <h4>RAM: </h4>
                <p><?php echo $_smarty_tpl->tpl_vars['ordenador']->value['RAM'];?>
 GB</p>

                <h4>Disco</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['ordenador']->value['disco'];?>
</p>

                <h4>Grafica</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['ordenador']->value['grafica'];?>
</p>

                <h4>Unidad Óptica</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['ordenador']->value['unidadoptica'];?>
</p>

                <h4>Sistema Operativo</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['ordenador']->value['SO'];?>
</p>

                <h4>Otros</h4>

                <h4>PVP</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['desc']->value['PVP'];?>
</p>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['ordenador']->value['otros'];?>

                </p>
                    <h4>Descripción</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['desc']->value['descripcion'];?>
</p>
                </section>
            </div>

        </body>
    </html><?php }
}
