<?php
    include('basedatos.php');

    if(!empty($_POST['nombre_empleado']) && !empty($_POST['edad_empleado'])){
        $conexionbd = conectar_bd();
        $query = "INSERT INTO empleados (nombre, edad) VALUES ('" . $_POST['nombre_empleado'] . "','" . $_POST['edad_empleado'] . "')";
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