<?php
/* Smarty version 3.1.33, created on 2019-02-04 10:57:22
  from 'C:\wamp\www\Tienda_Practica\template\loggin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c581a92edc8b2_63259492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b0ff3403df3d94bc3c4a0396ae6dd13ae51df2d' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda_Practica\\template\\loggin.tpl',
      1 => 1549277792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c581a92edc8b2_63259492 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LOGGIN-TIENDA</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <h1><?php if (!empty($_smarty_tpl->tpl_vars['msj']->value)) {
echo $_smarty_tpl->tpl_vars['msj']->value;
}?></h1>
        <fieldset>
            <legend>Atentificate</legend>
            <form action="loggin.php" method="POST">
                <label>Usuario</label>
                <input type="text" name="user">
                <label>Contraseña</label>
                <input type="password" name="pass">
                <input type="submit" name="conectar" value="Conectar">
            </form>
        </fieldset>
    </body>
</html><?php }
}
