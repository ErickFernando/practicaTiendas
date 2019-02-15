<?php

/**
 * Description of Cesta
 *
 * @author Erick Fer
 */
class Cesta extends Producto {

    //put your code here
    private $productos = [["cod" => null, "pvp" => null]];

    /**
     * constructor
     */
    public function __construct(string $cod) {

        $pp = ConexionPDO::buscaValor("producto", $cod);
        parent::__construct($pp['cod'], $pp['nombre_corto'], $pp['descripcion'], $pp['PVP'], $pp['familia']);
    }

    public function agregarProductos() {
        $this->productos['cod'] = $this->getCod();
        $this->productos['pvp'] = $this->getPvp();


        var_dump($this->productos);
    }

}
