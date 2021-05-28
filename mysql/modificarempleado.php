<?php
    include('basedatos.php');
    $conexionbd = conectar_bd();
    $query = "SELECT id, nombre, edad FROM empleados WHERE id=" . $_GET['id_empleado'] . " LIMIT 1";
    $resultado = mysqli_query($conexionbd, $query);
    mysqli_close($conexionbd);

    $registro = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modificar Empleado</title>
</head>
<body>
    <form action="actualizarempleado.php" method="POST" name="nuevoempleado">
        Nombre:
        <input type="text" name="nombre_empleado" value="<?php echo $registro['nombre'] ?>">
        <br><br>
        Edad:
        <input type="number" name="edad_empleado" value="<?php echo $registro['edad'] ?>">
        <input type="hidden" name="id_empleado" value="<?php echo $registro['id'] ?>">
        <br><br>
        <input type="submit" name="actualizar_empleado">
    </form>
</body>
</html>