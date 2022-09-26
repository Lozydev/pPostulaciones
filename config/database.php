<?php

Class Conectar{
    
    public static function conexion(){

        $conexion = new mysqli("localhost", "root", "", "db_crud");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;

    }
}

?>