<?php
/* Smarty version 3.1.33, created on 2019-02-25 22:34:20
  from 'C:\wamp\www\carpetTienda\Tienda_Practica9\template\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c746d6c1c3059_35567612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0d136c78bc1c594f72edfa633a4091012b174ee' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica9\\template\\cesta.tpl',
      1 => 1551134057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c746d6c1c3059_35567612 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="float:left">
    <div class="container">
        <header >
            <h3>Cesta</h3>
        </header>
    </div>
    <div class="container" style="background-color: #CECBCB">
        <section>

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
                    <button onclick='JaxonRespuestaAjax.removP("<?php echo $_smarty_tpl->tpl_vars['contact']->value[1];?>
");' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px'>Quitar</button><br/>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

            <?php } else { ?>
                <span class="font-weight-light"> Cesta Vacia</span>

            <?php }?>

        </section>

    </div>

    <div class="container bg-dark text-white">
        <section >
            <span class="font-weight-light" style="float: left"><?php if (!empty($_smarty_tpl->tpl_vars['total']->value)) {?>Total <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
$<?php }?> </span>
            <form action="productos.php" method="post">
                <?php echo $_smarty_tpl->tpl_vars['input']->value;?>

            </form>
            <?php echo $_smarty_tpl->tpl_vars['input2']->value;?>

        </section>
    </div>
</div><?php }
}
