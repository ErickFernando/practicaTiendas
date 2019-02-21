<?php

/**
 * Description of Cesta
 *
 * @author Erick Fer
 */
class Cesta {
    //put your code here

    /**
     * constructor
     */
    private static $productos = [];

    public function __construct() {
        
    }

    //
    /**
     * //obtenemos la variablse sesion de los productos
     * y agregamos en un nuevo array cantidad,precio y codigo
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
     * Obtenemos el precio  y multiplicamos segun la cantidad
     * 
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
     * agregamos nuevos articulos
     */
    public static function nuevoArticulo() {
        $cod = $_SESSION['cod'];
        $_SESSION['productos'][$cod] ++;
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
     * recuperamos la cantidad que hay de cada productos
     * y lo devolvemos
     * @param type $cod
     * @return type
     */
    static function getUniades($cod) {
        $unidades = $_SESSION['productos'][$cod];
        return $unidades;
    }

    /**
     * sumamos todos los precios y devolvemos el total
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
