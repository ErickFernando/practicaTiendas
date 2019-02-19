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

    public static function obtenerProductos() {

        if (isset($_SESSION['productos'])) {
            foreach ($_SESSION['productos'] as $key => $value) {
                self::$productos[] = [self::getUniades($key), $key, self::obtenerPrecio($key)];
            }
        }
        return self::$productos;
    }

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

    public static function nuevoArticulo() {

        $cod = $_SESSION['cod'];
        $_SESSION['productos'][$cod] ++;
//        $p = new Producto($_SESSION['cod']);
//
//        self::agregarProductos($p->getCod(), $p->getPvp());
    }

    public static function eliminarProducto() {
        $cod = $_SESSION['cod'];
        if ($_SESSION['productos'][$cod] > 0) {
            $_SESSION['productos'][$cod] --;
        }
        if ($_SESSION['productos'][$cod] == 0) {
            unset($_SESSION['productos'][$cod]);
        }
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

    static function getUniades($cod) {
        $unidades = $_SESSION['productos'][$cod];
        return $unidades;
    }

    public static function getTotal() {
        $p = self::$productos;
        $total = 0;
        foreach ($p as $key => $value) {
            $total += $value[2];
        }
        return $total;
    }

}
