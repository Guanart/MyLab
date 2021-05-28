<?php
    include('basedatos.php');

    if(!empty($_GET['id_empleado'])){
        $conexionbd = conectar_bd();
        $query = "DELETE FROM empleados WHERE id=" . $_GET['id_empleado'];
        $exito = mysqli_query($conexionbd, $query);
        if($exito)
        {
            header('Location: listaempleados.php');
        }
        else{
            header('Location: nuevoempleado.php');
        }
    }
    else
    {
        header('Location: nuevoempleado.php');
    }
?>