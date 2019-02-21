<?php
/* Smarty version 3.1.33, created on 2019-02-20 12:51:41
  from 'C:\wamp\www\carpetTienda\Tienda_Practica8\template\loggin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6d4d5d944544_98860280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8345843922d6ff3a95726702419b165ae4a85107' => 
    array (
      0 => 'C:\\wamp\\www\\carpetTienda\\Tienda_Practica8\\template\\loggin.tpl',
      1 => 1549620875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6d4d5d944544_98860280 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LOGGIN-TIENDA</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css"  href="../css/estilos.css">
    </head>
    <body>
        
        <div class="container">
            <div class="alert alert-danger" role="alert">
               <h3><?php if (!empty($_smarty_tpl->tpl_vars['msj']->value)) {
echo $_smarty_tpl->tpl_vars['msj']->value;
}?></h3>
            </div>
            <fieldset>
                <legend>Autenticate</legend>
                <form action="loggin.php" method="POST" >
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Usuario</label>
                        <div class="col-sm-5">
                            <input type="text" name="user" class="form-control form-control-sm" id="colFormLabelSm" placeholder="usuario">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-5">
                            <input type="password" name="pass" class="form-control" id="colFormLabel" placeholder="****">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <input type="submit" class="btn btn-primary" id="colFormLabelLg" placeholder="col-form-label-lg" name="conectar" value="Conectar">
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </body>
</html><?php }
}
