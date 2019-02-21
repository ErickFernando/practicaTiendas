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


//si le da a la opcion añadir agregamos nuevos productos
if (isset($_POST['añadir'])) {

    $_SESSION['cod'] = $_POST['cod'];
    Cesta::nuevoArticulo();
    $productos = Cesta::obtenerProductos();
    $total = Cesta::getTotal();
    $smarty->assign('total', $total);
    $smarty->assign('productosCesta', $productos);
    
}

$smarty->display('productos.tpl');