<?php

require ('cargarcontroladores.php');
require ('controlador.php');

$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

$user = $_SESSION['user'];


//mostramos los datos en listadoProtuctos.tpl
$productos = ConexionPDO::muestraVlores("producto");
$campos = ConexionPDO::muestraCampos("producto");
//var_dump($productos);
$smarty->assign('productos', $productos);
$smarty->assign('campos', $campos);
$smarty->assign('user', $user);
$smarty->display('listadoProductos.tpl');
