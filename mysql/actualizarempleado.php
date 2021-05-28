<?php
    include('basedatos.php');

    if(!empty($_POST['nombre_empleado']) && !empty($_POST['edad_empleado']) && !empty($_POST['id_empleado'])){
        $conexionbd = conectar_bd();
        $query = "UPDATE empleados SET nombre='" . $_POST['nombre_empleado'] . "', edad='" . $_POST['edad_empleado'] . "' WHERE id=" . $_POST['id_empleado'] ;
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