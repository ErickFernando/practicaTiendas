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
    public function __construct(string $cod, string $nombre, string $des, string $pvp, string $familia) {


        $this->cod = $cod;
        $this->nombre = $nombre;
        $this->des = $des;
        $this->pvp = $pvp;
        $this->familia = $familia;
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
