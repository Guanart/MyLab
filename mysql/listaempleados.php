<?php
    include('basedatos.php');
    $conexionbd = conectar_bd();
    $query = "SELECT id, nombre, edad FROM empleados";
    $resultado = mysqli_query($conexionbd, $query);
    mysqli_close($conexionbd);
?>

<html>
<head>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Lista de empleados</h1>
    <table>
        <tr>
            <th>User</th>
            <th>Edad</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        <ul>
            <?php
                while($registro = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>" . $registro['nombre'] . "</td>";
                    echo "<td>" . $registro['edad'] . ' años</td>';
                    echo "<td>" . "<a href='modificarempleado.php?id_empleado=" . $registro['id'] . "'>Modificar</a></td>";
                    echo "<td>" . "<a href='eliminarempleado.php?id_empleado=" . $registro['id'] . "'>Eliminar</a></td>";
                    echo "</tr>";
                }
            ?>
        </ul>
    </table>
</body>
</html>