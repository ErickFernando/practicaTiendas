<?php

/**
 * Description of ConexionPDO
 *
 * @author Erick Fer
 */
class ConexionPDO {

    /**
     * funcion statica que conecta a la BD
     * @return \PDO
     */
    public static function conectar() {
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => true, PDO::ERRMODE_EXCEPTION => true);

        try {

            $con = new PDO("mysql:host=localhost; dbname=dwes", "root", "root", $opciones);

            return $con;
        } catch (PDOException $ex) {
            echo $ex->getMessage() . "<br/>";
        }
    }

    /**
     * mostramos las bases de datos que existen
     * o muestra un error de pdoException
     * @return array
     */
//    public function muestraBD(): array {
//        try {
//            $con = new PDO("mysql:" . $this->host, $this->user, $this->pwd);
//            $r = $con->prepare("show databases");
//            $r->execute();
//            $db = null;
//            while ($f = $r->fetch(PDO::FETCH_ASSOC)) {
//                $db[] = $f;
//            }
//            return $db;
//        } catch (PDOException $ex) {
//            echo $ex->getMessage();
//        }
//    }

    /**
     * mostramos las tablas de la base datos
     * seleccionada
     * @return array
     */
    public function muestraTablas(): array {
        $r = ConexionPDO::conectar()->prepare("show full tables");
        $r->execute();


        $tb = [];
        if ($r->fetch(PDO::FETCH_ASSOC) != null) {
            while ($f = $r->fetch(PDO::FETCH_ASSOC)) {
                $tb[] = $f;
            }

            return $tb;
        }
    }

    /**
     * mostramos los valores de la tabla seleccionada
     * 
     * @param string $nombreTabla
     * @return array
     */
    public static function muestraCampos(string $nombreTabla): array {

        $consulta = ConexionPDO::conectar()->query("select * from $nombreTabla");
        $muestra_campos = null;
        //obtenemos el numero de columnas
        $total_column = $consulta->columnCount();
        //nos recorremos 

        for ($counter = 0; $counter < $total_column; $counter ++) {
            //obtenemos los campos de cada columna y los guardamos en un array
            $meta = $consulta->getColumnMeta($counter);
            $muestra_campos[] = $meta['name'];
        }
        return $muestra_campos;
    }

    /**
     * mostramos los valores de la tabla seleccionada
     * @param string $nombreTabla
     * @return type
     */
    public static function obtieneProductos(string $nombreTabla): array {

        $consulta = ConexionPDO::conectar()->prepare("select * from $nombreTabla");
        $consulta->execute();
//        $consulta->execute();
        $valores = [];

        while ($f = $consulta->fetch()) {
            array_push($valores, $f);
        }
        return $valores;
    }

    /**
     * buscamos el valor de la fila seleccionada 
     * necesitaremos el campo de la columna, el valor del campo
     * y el nombre de la tabla
     * @param string $key
     * @param string $nameTable
     * @param type $id
     * @return type
     */
    public static function buscaValor(string $nameTable, $id) {

        $consulta = ConexionPDO::conectar()->prepare("select * from $nameTable where cod ='$id'");
        $consulta->execute();
        while ($f = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return $f;
        }
    }

//    /**
//     * 
//     * @param string $nameTable
//     * @return type
//     */
//    public function buscaValor2(string $nameTable) {
//        $consulta = $this->conex->prepare("select * from $nameTable");
//        $consulta->execute();
//        while ($f = $consulta->fetch(PDO::FETCH_ASSOC)) {
//            return $f;
//        }
//    }

    /**
     * Hacemos un update de la tabla seleccionada
     * necesitamos el nombre de la columna, nombre de la tabla
     * el valor del campo y los nuevos datos cambiados
     * @param array $key
     * @param string $nomTabla
     * @param type $id
     * @param array $datosAC
     * @return boolean
     */
    public static function update(array $key, string $nomTabla, $id, array $datosAC) {
        //iremos construyendo la sentencia poco
        $consulta = "update $nomTabla set ";
        //recuperamos el mnombre de la columna y el valor introducido y lo concatemos
        for ($index = 0; $index < count($key); $index++) {
            $consulta .= $key[$index] . "='$datosAC[$index]', ";
        }
        //borramos la ultima coma ","
        $consulta = substr($consulta, 0, -2);
        //concatenamos el where con la primea columna  (el nombre de la columna) y el id
        $consulta .= " where $key[0] = '$id'";
        //ejecutamos la sentencia
        $ejecutar = ConexionPDO::conectar()->prepare($consulta);
        if ($ejecutar->execute() === true) {
            return true;
        }
    }

    /**
     * insertar nuevas filas en una tabla seleccionada, para ello
     * necesitamos el nombre de la tabla, los campos a rellenar y los nuevos valores 
     * ingresados
     * @param array $key
     * @param string $nombreTabla
     * @param array $valorsInput
     * @return boolean
     */
    public static function insert(array $key, string $nombreTabla, array $valorsInput) {
        //iremos construyendo la sentencia segun los valores que tengamos
        $consulta = "insert into $nombreTabla (";
        for ($index = 0; $index < count($key); $index++) {
            $consulta .= $key[$index] . ", ";
        }
        $consulta = substr($consulta, 0, -2); //borramos la ultima coma ","
        //ahora seguimos, concatemos el values 
        $consulta .= ") values(";
        //concatenamos los valores a insertar
        for ($index = 0; $index < count($valorsInput); $index++) {
            $consulta .= "'" . $valorsInput[$index] . "', ";
        }

        $consulta = substr($consulta, 0, -2); //borramos la ultima coma ","
        $consulta .= ")";


        $ejecutar = ConexionPDO::conectar()->prepare($consulta);
        if ($ejecutar->execute() === true) {
            return true;
        }
//        INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')
    }

    /**
     * eliminado la fila que haya seleccionado,
     * para ello debemos recibir el nombre de la tabla, el id y el campo
     * con el coincide
     * @param string $key
     * @param string $nameTable
     * @param string $id
     * @return boolean
     */
    public static function eliminarFila(string $key, string $nameTable, string $id) {
        $consulta = ConexionPDO::conectar()->prepare("delete from $nameTable where $key='$id'");
        if ($consulta->execute() === true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * comprobamos que el usuario exista
     * @param string $user
     * @param string $pass
     * @return boolean
     */
    public static function validarUsuario(string $user, string $pass) {
        $realizarCon = ConexionPDO::conectar()->prepare("select * from usuarios where usuario='$user' and password='$pass'");
        $realizarCon->execute();
        $f = null;
        while ($f = $realizarCon->fetch(PDO::FETCH_NUM)) {
            if ($f[0] === $user && $f[1] === $pass) {
                return true;
            }
        }
    }

    //setters and getters
    function getHost() {
        return $this->host;
    }

    function getUser() {
        return $this->user;
    }

    function getPwd() {
        return $this->pwd;
    }

    function getBd() {
        return $this->bd;
    }

    function setHost($host) {
        $this->host = $host;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    function setBd($bd) {
        $this->bd = $bd;
    }

}
