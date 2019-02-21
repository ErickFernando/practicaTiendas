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

//vaciamos la variable de session de productos
if (isset($_POST['Vaciar'])) {

    $_SESSION['productos'] = null;
}
//añadismos productos
if (isset($_POST['añadir'])) {
    //recuperamos el codigo
    $_SESSION['cod'] = $_POST['cod'];
    //agregamos nuevos articulos
    Cesta::nuevoArticulo();
    //obtenemos los productos
    $productos = Cesta::obtenerProductos();
    $total = Cesta::getTotal();
    //agregamos a smarty
    $smarty->assign('total', $total);
    $smarty->assign('productosCesta', $productos);
}
//opcion quitar
if (isset($_POST['quitar'])) {
    //recuperamos el codigo
    $_SESSION['cod'] = $_POST['cod'];
    //eliminamos el productos
    Cesta::eliminarProducto();
    //obtenemos el producto
    $productos = Cesta::obtenerProductos();
    $total = Cesta::getTotal();
    $smarty->assign('total', $total);
    $smarty->assign('productosCesta', $productos);
}
//si la vriable de sesion de prductos es null creamos los input con disabled
if ($_SESSION['productos'] == null) {
    $deshabilitado = "<input type='submit' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px' value='Pagar' name='Pagar' disabled>";
    $deshabilitado2 = "<input type='submit' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px' value='Vaciar' name='Vaciar' disabled>";
    $smarty->assign('input', $deshabilitado);
    $smarty->assign('input2', $deshabilitado2);
} else {
    $habilitado = "<input type='submit' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px' value='Pagar' name='Pagar'>";
    $habilitado2 = "<input type='submit' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px' value='Vaciar' name='Vaciar'>";
    $smarty->assign('input', $habilitado);
    $smarty->assign('input2', $habilitado2);
}
//si la opcion es pagar 
if (isset($_POST['Pagar'])) {
    $smarty->display('pagar.tpl');
} else {
    $smarty->display('productos.tpl');
}
