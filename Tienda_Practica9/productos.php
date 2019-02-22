<?php
//cargamos las clases, ajax,Smarty
require ('cargarcontroladores.php');
require ('controlador.php');

require_once './vendor/autoload.php';
//creamos el objeto smarty
$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

use Jaxon\Jaxon;
use Jaxon\Response\Response;

$ajax = jaxon(); //$ajax = new Jaxon();

class RespuestaAjax {
    /**
     * Funcion que recibe el codigo y lo añade
     * a la lista
     * @param type $cod
     * @return Response
     */
    public function addP($cod) {

        $respuesta = new Response();

        $_SESSION['cod'] = $cod;
        //agregamos el articulo
        Cesta::nuevoArticulo();

        return $respuesta;
    }
    /**
     * recibe el codigo y lo eliminar de la lista
     * @param type $cod
     * @return Response
     */
    public function removP($cod) {

        $respuesta = new Response();

        $_SESSION['cod'] = $cod;
        //agregamos el articulo
        Cesta::eliminarProducto();

        return $respuesta;
    }
    /**
     * Vacia la variable de session productos
     * @return Response
     */
    public function vaciarLista() {

        $respuesta = new Response();


        //agregamos el articulo
        Cesta::vaciar();

        return $respuesta;
    }

}

//De este modo estamos registrando una clase
$ajax->register(Jaxon::CALLABLE_OBJECT, new RespuestaAjax());
$ajax->processRequest();

//agregamos el css js y el escript al tpl
$smarty->assign('getcss', $ajax->getCss());
$smarty->assign('getJS', $ajax->getJs());
$smarty->assign('getScript', $ajax->getScript());

error_reporting(E_ERROR | E_WARNING | E_PARSE);


//recibo al usuario
$user = $_SESSION['user'];

//mostramos los datos en listadoProtuctos.tpl
$productos = ConexionPDO::obtieneProductos("producto");


//pasamos los productos para servizualizados en la plantilla
//el usuario con el que estas loggeado
$smarty->assign('productos', $productos);
$smarty->assign('user', $user);

//vaciamos el array de los productos
$_SESSION['productosT'] = Cesta::obtenerProductos();
$_SESSION['total'] = Cesta::getTotal();

//añadimos productos a la cesta
if (isset($_POST['añadir'])) {
    //obtengo el codigo y lo guardo en una variable de session
//    $_SESSION['cod'] = $_POST['cod'];
//    //agregamos el articulo
//    Cesta::nuevoArticulo();
    //obtenemos los productos con la cantidad, codigo y el precio
//    $productos = Cesta::obtenerProductos();
    //obtenemos el total
//    $total = Cesta::getTotal();
    //asignamos a las plantilla
}

//opcion quitar
if (isset($_POST['quitar'])) {
//    //recuperamos el codigo
//    $_SESSION['cod'] = $_POST['cod'];
//    //eliminamos el codigo
//    Cesta::eliminarProducto();
//    //obtenemos devuelta los productos
//    $productos = Cesta::obtenerProductos();
//    //el total
//    $total = Cesta::getTotal();
//    $smarty->assign('total', $total);
//    $smarty->assign('productosCesta', $productos);
}


//comprobamos que el array productos este vacio.. 
//si esta vacio creamos los inputs con la opcion Disabled 
//si no solo creamos los inputs
if ($_SESSION['productos'] == null) {
    $deshabilitado = "<input type='submit' class='btn btn-light' style='float:left; border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px' value='Pagar' name='Pagar' disabled>";
    $deshabilitado2 = "<button onclick='vaciar2();' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px' disabled>Vaciar</button>";
    $smarty->assign('input', $deshabilitado);
    $smarty->assign('input2', $deshabilitado2);
} else {
    $habilitado = "<input type='submit'  class='btn btn-light' style='float:left;border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px' value='Pagar' name='Pagar'>";
    $habilitado2 = "<button onclick='vaciar2();' class='btn btn-light' style='border-radius: 20px;font-size: 12px; margin-left: 20px;margin-bottom: 5px' >Vaciar</button>";
    $smarty->assign('input', $habilitado);
    $smarty->assign('input2', $habilitado2);
}



//si le da a la opción pagar
if (isset($_POST['Pagar'])) {
    //redirigimos a pagar.php
    header("Location:pagar.php?");
} else {
    //si no mostrar el template actual
    $smarty->assign('total', $_SESSION['total']);
    $smarty->assign('productosCesta', $_SESSION['productosT']);
    $smarty->display('productos.tpl');
}
