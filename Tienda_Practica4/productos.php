<?php

require ('cargarcontroladores.php');
require ('controlador.php');

$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

$user = $_SESSION['user'];
//comprobamos q c este incializado y creado y si no esta creamos el objeto cesta
//$c = (isset($_SESSION['c'])) ? $_SESSION['c'] : $_SESSION['c'] = new Cesta;
//mostramos los datos en listadoProtuctos.tpl
$productos = ConexionPDO::obtieneProductos("producto");

//var_dump($productos);
//pasamos los productos para servizualizados en la plantilla
//el usuario con el que estas loggeado
$smarty->assign('productos', $productos);
$smarty->assign('user', $user);

if (isset($_POST['añadir'])) {

    $_SESSION['cod'] = $_POST['cod'];
    Cesta::nuevoArticulo();
    $productos = Cesta::obtenerProductos();
    $total = Cesta::getTotal();
    $smarty->assign('total', $total);
    $smarty->assign('productosCesta', $productos);
    
}

$smarty->display('productos.tpl');