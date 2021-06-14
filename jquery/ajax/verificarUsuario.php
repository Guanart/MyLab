<?php
    $usuario = $_GET['usuario'];
    $conexion = mysqli_connect("localhost", "root", "", "bdusuarios");
    $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_Usuario='" . $usuario . "'");

    if (mysqli_num_rows($query)>0)
        echo "Existe";
    else echo "No existe";
?>