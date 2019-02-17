<?php

/**
 * Description of Cesta
 *
 * @author Erick Fer
 */
class Cesta extends Producto {

    //put your code here
    private $productos = [];

    /**
     * constructor
     */
    public function __construct(string $cod) {

        $pp = ConexionPDO::buscaValor("producto", $cod);
        parent::__construct($pp['cod'], $pp['nombre_corto'], $pp['descripcion'], $pp['PVP'], $pp['familia']);
    }

    public function agregarProductos() {
        $this->productos[$this->getCod()] = $this->getPvp();
        

        var_dump($this->productos);
    }

    function getProductos() {
        return $this->productos;
    }

    function setProductos($productos) {
        $this->productos = $productos;
    }

}
