<?php
    include("basedatos.php");

    $conexion = conectar_bd();
    echo $conexion;
    mysqli_close($conexion);

?>