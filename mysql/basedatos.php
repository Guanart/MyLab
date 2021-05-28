<?php
    # Conexión a base de datos
    function conectar_bd(){
        $hostname = "localhost";
        $dbname = "test";
        $username = "root";
        $password = "";
        
        $conexion = mysqli_connect($hostname, $username, $password, $dbname);
        mysqli_select_db($conexion, $dbname);

        return $conexion;
    }
?>