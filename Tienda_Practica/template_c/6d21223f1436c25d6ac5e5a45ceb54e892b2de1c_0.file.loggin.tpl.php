<?php
/* Smarty version 3.1.33, created on 2019-02-04 11:21:03
  from 'C:\wamp\www\carpeta_tienda\Tienda_Practica\template\loggin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c58201fd534e6_79928018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d21223f1436c25d6ac5e5a45ceb54e892b2de1c' => 
    array (
      0 => 'C:\\wamp\\www\\carpeta_tienda\\Tienda_Practica\\template\\loggin.tpl',
      1 => 1549279261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c58201fd534e6_79928018 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LOGGIN-TIENDA</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <h2><?php if (!empty($_smarty_tpl->tpl_vars['msj']->value)) {
echo $_smarty_tpl->tpl_vars['msj']->value;
}?></h2>
        <fieldset>
            <legend>Atentificate</legend>
            <form action="loggin.php" method="POST">
                <label>Usuario</label>
                <input type="text" name="user"><br/>
                <label>Contraseña</label>
                <input type="password" name="pass">
                <input type="submit" name="conectar" value="Conectar">
            </form>
        </fieldset>
    </body>
</html><?php }
}
