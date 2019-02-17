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

$smarty->assign('productos', $productos);
$smarty->assign('user', $user);
$smarty->display('listadoProductos.tpl');


//obtenemos el codigo del producto y creamos un el objeot producto elegido
if (isset($_POST['añadir'])) {

    $c = new Cesta($_POST['hidden']);
    $c->agregarProductos();
}
