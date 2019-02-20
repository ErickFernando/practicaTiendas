<?php

/**
 * Description of Producto
 *
 * @author Erick Fer
 */
class Producto {

    private $cod;
    private $nombre;
    private $des;
    private $pvp;
    private $familia;

    /**
     * constructor donde buscamos el producto elegido
     * e inicializamos los atributos
     * @param string $cod
     */
    public function __construct(string $cod) {
        $pp = ConexionPDO::buscaValor("producto", $cod);
        $this->cod = $pp['cod'];
        $this->nombre = $pp['nombre_corto'];
        $this->des = $pp['descripcion'];
        $this->pvp = $pp['PVP'];
        $this->familia = $pp['familia'];
    }

    //getters and setters
    function getCod() {
        return $this->cod;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDes() {
        return $this->des;
    }

    function getPvp() {
        return $this->pvp;
    }

    function getFamilia() {
        return $this->familia;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDes($des) {
        $this->des = $des;
    }

    function setPvp($pvp) {
        $this->pvp = $pvp;
    }

    function setFamilia($familia) {
        $this->familia = $familia;
    }

}
