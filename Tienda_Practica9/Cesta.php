<?php

/**
 * Description of Cesta
 * <?php

 * @author Erick Fer
 */
class Cesta {
    //put your code here

    /**
     * constructor
     */
    private static $productos = [];

    /**
     * Constructor
     */
    public function __construct() {
        
    }

    /**
     * recuperamos array de la variable de session productos 
     * y agrgamos en un nuevo array
     * codigo, cantidad y precio
     * @return type
     */
    public static function obtenerProductos() {

        if (isset($_SESSION['productos'])) {
            foreach ($_SESSION['productos'] as $key => $value) {
                self::$productos[] = [self::getUniades($key), $key, self::obtenerPrecio($key)];
            }
        }

        return self::$productos;
    }

    /**
     * obetenemos el codigo y segun el codigo
     * recuperamos el precio y multiplicamos
     * por la cantidad que este en ese instante
     * @param type $cod
     * @return type
     */
    public static function obtenerPrecio($cod) {
        $precio = 0;
        $pro = ConexionPDO::obtieneProductos("producto");
        foreach ($pro as $key => $value) {
            if ($value['cod'] === $cod) {

                $precio = (float) $value['PVP'] * $_SESSION['productos'][$cod];
            }
        }
        return $precio;
    }

    /**
     * agregamos nuevos articulos cod y cantidad
     */
    public static function nuevoArticulo() {

        $cod = $_SESSION['cod'];
        $_SESSION['productos'][$cod] ++;

        header("Location: productos.php"); // Evitar que incremente al recargar página 'icon'...

        exit();
//        $p = new Producto($_SESSION['cod']);
//
//        self::agregarProductos($p->getCod(), $p->getPvp());
    }
/**
 * Vaciamos la cesta
 */
    public static function vaciar() {
        $_SESSION['productos'] = null;
        header("Location: productos.php"); // Evitar que incremente al recargar página 
        exit();
//        $p = new Producto($_SESSION['cod']);
//
//        self::agregarProductos($p->getCod(), $p->getPvp());
    }

    /**
     * 
     * Eliminamos los productos
     */
    public static function eliminarProducto() {
        $cod = $_SESSION['cod'];
        if ($_SESSION['productos'][$cod] > 0) {
            $_SESSION['productos'][$cod] --;
        }
        if ($_SESSION['productos'][$cod] == 0) {
            unset($_SESSION['productos'][$cod]);
        }
        header("Location: productos.php"); // Evitar que incremente al recargar página 
        exit();
//        $p = new Producto($_SESSION['cod']);
//
//        self::agregarProductos($p->getCod(), $p->getPvp());
    }

    function getProductos() {
        return $this->productos;
    }

    function setProductos($productos) {
        $this->productos = $productos;
    }

    /**
     * recuperamos la cantidad segun el codigo
     * @param type $cod
     * @return type
     */
    static function getUniades($cod) {
        $unidades = $_SESSION['productos'][$cod];
        return $unidades;
    }

    /**
     * obtenemos el total de los productos
     * @return type
     */
    public static function getTotal() {
        $p = self::$productos;
        $total = 0;
        foreach ($p as $key => $value) {
            $total += $value[2];
        }
        return $total;
    }

}
