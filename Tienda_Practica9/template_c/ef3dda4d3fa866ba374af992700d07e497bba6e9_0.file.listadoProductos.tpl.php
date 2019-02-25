<?php
/* Smarty version 3.1.33, created on 2019-02-25 22:33:28
  from 'C:\wamp\www\carpetTienda\Tienda_Practica9\template\listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c746d385dd292_40689964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef3dda4d3fa866ba374af992700d07e497bba6e9' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica9\\template\\listadoProductos.tpl',
      1 => 1551134006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c746d385dd292_40689964 (Smarty_Internal_Template $_smarty_tpl) {
?>


    <div  style="float:left">
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
                                <td><button onclick='JaxonRespuestaAjax.addP("<?php echo $_smarty_tpl->tpl_vars['contact']->value['cod'];?>
");'>Añadir</button></td></tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                     
                            </tbody> 

                        </table>

                    </section>
                </div>
         
<?php }
}
