<?php
require_once __DIR__ ."/../config.php";

// TODO : mejorar
// TODO : agregar filtros de saneamiento
class Mysql {
    public function connect() {
        $mysqli = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
        
        if ($mysqli->connect_error) {
            die('Error de Conexión (' . $mysqli->connect_errno . ') ' //TODO : mejorar esta parte
                    . $mysqli->connect_error);
        }
        
        return $mysqli;
    }
}