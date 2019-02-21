<?php

require ('cargarcontroladores.php');
require ('controlador.php');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

//recibo al usuario
$user = $_SESSION['user'];

//mostramos los datos en listadoProtuctos.tpl
$productos = ConexionPDO::obtieneProductos("producto");


//pasamos los productos para servizualizados en la plantilla
//el usuario con el que estas loggeado
$smarty->assign('productos', $productos);
$smarty->assign('user', $user);

//vaciamos el array de los productos
if (isset($_POST['Vaciar'])) {

    $_SESSION['productos'] = null;
}
//añadimos productos a la cesta
if (isset($_POST['añadir'])) {
    //obtengo el codigo y lo guardo en una variable de session
    $_SESSION['cod'] = $_POST['cod'];
    //agregamos el articulo
    Cesta::nuevoArticulo();
    //obtenemos los productos con la cantidad, codigo y el precio
    $productos = Cesta::obtenerProductos();
    //obtenemos el total
    $total = Cesta::getTotal();
    //asignamos a las plantilla
    $smarty->assign('total', $total);
    $smarty->assign('productosCesta', $productos);
}

//opcion quitar
if (isset($_POST['quitar'])) {
    //recuperamos el codigo
    $_SESSION['cod'] = $_POST['cod'];
    //eliminamos el codigo
    Cesta::eliminarProducto();
    //obtenemos devuelta los productos
    $productos = Cesta::obtenerProductos();
    //el total
    $total = Cesta::getTotal();
    $smarty->assign('total', $total);
    $smarty->assign('productosCesta', $productos);
}


//comprobamos que el array productos este vacio.. 
//si esta vacio creamos los inputs con la opcion Disabled 
//si no solo creamos los inputs
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



//si le da a la opción pagar
if (isset($_POST['Pagar'])) {
//recuperamos los productos y guardamos en una variable de session
    $_SESSION['productosT'] = Cesta::obtenerProductos();
//el total
    $_SESSION['total'] = Cesta::getTotal();
    //redirigimos a pagar.php
    header("Location:pagar.php?");
} else {
    //si no mostrar el template actual
    $smarty->display('productos.tpl');
}
