<?php

require ('cargarcontroladores.php');
require ('controlador.php');

$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

$user = $_SESSION['user'];


//mostramos los datos en listadoProtuctos.tpl
$productos = ConexionPDO::obtieneProductos("producto");

//var_dump($productos);
//pasamos los productos para servizualizados en la plantilla
//el usuario con el que estas loggeado
$smarty->assign('productos', $productos);
$smarty->assign('user', $user);
$smarty->display('listadoProductos.tpl');


