<?php

/**
 * Description of Cesta
 *
 * @author Erick Fer
 */
class Cesta extends Producto {
    //put your code here

    /**
     * constructor
     */
    private $productos = [];

    public function __construct() {
        
    }

    public function agregarProductos(string $cod, string $pvp) {

        $this->productos[$cod] = $pvp;

        
    }

    function getProductos() {
        return $this->productos;
    }

    function setProductos($productos) {
        $this->productos = $productos;
    }

}
